<?php

namespace app\controllers;

use app\forms\LoginForm;
use core\ParamUtils;
use core\App;
use core\SessionUtils;
use core\RoleUtils;
use core\Utils;
use core\Validator;

class LoginCtrl
{
    public $form;
    public $accountData;
    public function __construct(){
        $this->form = new LoginForm();
    }
 function getLoginParams(){
        $this->form->login = ParamUtils::getFromRequest("login");
        $this->form->password = ParamUtils::getFromRequest("password");
    }

public function validateLogin() {
    if (!empty(SessionUtils::load("id_uzytkownik", true))) {
        return true;
    }

    $v = new Validator();
    $validationPassed = true;

    $v->validate($this->form->login, [
        'trim' => true,
        'required' => true,
        'required_message' => 'Login jest wymagany',
        'min_length' => 3,
        'max_length' => 32,
        'validator_message' => 'Login powinien zawierać od 3 do 32 znaków'
    ]);

    if ($v->isLastOK()) {
        $v->validate($this->form->password, [
            'required' => true,
            'required_message' => 'Hasło jest wymagane',
        ]);

        if ($v->isLastOK()) {
            try {
                $this->accountData = App::getDB()->get(
                    "uzytkownik",
                    [
                        "[>]pozwolenie" => ["id_uzytkownik" => "uzytkownik_id"],
                    ],
                    [
                        'uzytkownik.id_uzytkownik',
                        'uzytkownik.login',
                        'uzytkownik.haslo',
                        'pozwolenie.rola_id'
                    ],
                    [
                        'login' => $this->form->login,
                        'haslo' => $this->form->password
                    ]
                );

                if (empty($this->accountData)) {
                    Utils::addErrorMessage("Nieprawidłowy login lub hasło");
                    $validationPassed = false;
                }
            } catch (\PDOException $e) {
                Utils::addErrorMessage("Błąd połączenia z bazą danych: " . $e->getMessage());
                $validationPassed = false;
            }
        } else {
            $validationPassed = false;
        }
    } else {
        $validationPassed = false;
    }

    return $validationPassed;
}
    public function generateView(){
        if($this->validateLogin()){
            SessionUtils::store("id_uzytkownik", $this->accountData["id_uzytkownik"]);
            SessionUtils::store("login", $this->accountData["login"]);
            SessionUtils::store("pozwolenie", $this->accountData["rola_id"]);

            

            RoleUtils::addRole($this->accountData["rola_id"]);
            RoleUtils::addRole("logged");
            Utils::addInfoMessage("Logowanie udane!");
			App::getSmarty()->display('roslinaListTable.tpl');
         
		  App::getRouter()->redirectTo("roslinaList");
         
        }
        else{
            App::getSmarty()->assign('page_title','Zaloguj się');
            App::getSmarty()->assign('page_description','Logowanie do systemu');
            App::getSmarty()->display('LoginView.tpl');
			
        }
    }

    public function action_login(){
        $this->getLoginParams();
        $this->generateView();
    }

    public function action_logout(){
        RoleUtils::removeRole("logged");
        RoleUtils::removeRole(SessionUtils::load("pozwolenie"));
        SessionUtils::remove("id_uzytkownik");
        SessionUtils::remove("login");
        SessionUtils::remove("pozwolenie");
        header("Location: ".App::getConf()->app_url);
		session_destroy();
    }
}