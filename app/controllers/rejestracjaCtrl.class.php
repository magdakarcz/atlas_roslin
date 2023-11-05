<?php

namespace app\controllers;

use app\forms\rejestracjaForm;
use core\SessionUtils;
use core\ParamUtils;
use core\App;
use core\Utils;
use core\Validator;

class rejestracjaCtrl
{
    public $form;

    public function __construct(){
        $this->form = new rejestracjaForm();
    }

    /**
     *
     */
    public function getFormParams(){
        
        $this->form->login = ParamUtils::getFromRequest("login");
        $this->form->password = ParamUtils::getFromRequest("password");
        $this->form->password_repeat = ParamUtils::getFromRequest("password_repeat");
       
    }

    public function validateForm(){
        if(!empty(SessionUtils::load("id", true))) return true;

        if(!$this->form->checkIsNull()) return false;

        $v = new Validator();

        $v->validate($this->form->login,[
            'trim' => true,
            'required' => true,
            'required_message' => 'Login jest wymagany',
            'min_length' => 3,
            'max_length' => 32,
            'validator_message' => 'Login powinien zawierać od 3 do 32 znaków'
        ]);

        $v->validate($this->form->password,[
            'required' => true,
            'required_message' => 'Hasło jest wymagane',
            'regexp' => "/(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{5,}/",
            'validator_message' => 'Hasło powinno mieć conajmniej 5 znaków, jedną literę i jedną liczbę'
        ]);

        $v->validate($this->form->password_repeat,[
            'required' => true,
            'required_message' => 'Hasło jest wymagane'
        ]);

        if($this->form->password_repeat != $this->form->password){
            Utils::addErrorMessage("Hasła nie są identyczne!");
        }


        $this->checkForDuplicate();

        if(!App::getMessages()->isError()) return true;
        else return false;
    }

    public function checkForDuplicate(){
        try{
            $loginCount = App::getDB()->has("uzytkownik", [
                'login' => $this->form->login
            ]);



            if($loginCount){
                Utils::addErrorMessage("Podany login jest już zajęty");
            }


        }catch(\PDOException $e){
			Utils::addErrorMessage("Błąd połączenia z bazą danych: " . $e->getMessage());
        }
    }

    /**
     *
     */
    public function insertToDb(){
		try{
			if (($this->form->id_uzytkownik == '') ) { //nowy rekord jesli pole formularza id jest puste
                    $count = App::getDB()->count("uzytkownik");
                    if ($count <= 100) {

                        App::getDB()->insert("uzytkownik", [
                            "login" =>$this->form->login,
							"haslo" => $this-> form ->password
                        ]);
						App::getDB()->insert("pozwolenie", [
							"uzytkownik_id" => App::getDB()->id(),
							"rola_id" =>'2'
						]);
                    
						
						
                    } else { 
                        Utils::addInfoMessage('Ograniczenie: Zbyt dużo użytkowników.');
                        $this->generateView(); 
                        exit(); 
                    }
                }
		
		}catch(\PDOException $e){
            Utils::addErrorMessage("Błąd połączenia z bazą danych!");
        }
		
    }


    public function generateView(){
        if($this->validateForm()){
            $this->insertToDb();
			App::getRouter()->redirectTo("login");
           
        }
        else{
            App::getSmarty()->assign('page_title','Rejestracja');
            App::getSmarty()->assign('page_description','Rejestracja');
            App::getSmarty()->display('rejestracjaView.tpl');
        }
    }


    public function action_register(){
        $this->getFormParams();
        $this->generateView();
    }
}