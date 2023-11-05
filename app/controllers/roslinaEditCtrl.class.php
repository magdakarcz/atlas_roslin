<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use core\Validator;
use app\forms\roslinaEditForm;

class roslinaEditCtrl {

    private $form; 

    public function __construct() {
        $this->form = new roslinaEditForm();
    }
    public function validateSave() {
        $this->form->id = ParamUtils::getFromPost('id_roslina', true, 'Błędne wywołanie aplikacji');

        $v = new Validator();

        $this->form->nazwa_naukowa = $v->validateFromPost('nazwa_naukowa', [
            'trim' => true,
            'required' => true,
            'required_message' => 'Podaj nazwę naukową',
            'min_length' => 2,
            'max_length' => 40,
            'validator_message' => 'Nazwa naukowa powinno mieć od 2 do 40 znaków'
        ]);
        $this->form->nazwa_potoczna = $v->validateFromPost('nazwa_potoczna', [
            'trim' => true,
            'required' => false,
            'required_message' => 'Podaj nazwę potoczną',
            'min_length' => 2,
            'max_length' => 30,
            'validator_message' => 'Nazwa potoczna powinna mieć od 2 do 30 znaków'
        ]);
        $this->form->toksycznosc = $v->validateFromPost('toksycznosc', [
            'trim' => true,
            'required' => false,
            'required_message' => "Wprowadź toksyczność",
			'min_length' => 1,
            'max_length' => 1,
            'validator_message' => ""
		]);	
		$this->form->min_temperatura = $v->validateFromPost('min_temperatura', [
            'trim' => true,
            'required' => false,
            'required_message' => 'Podaj minimalną temperaturę',
            'min_length' => 1,
            'max_length' => 2,
            'validator_message' => 'Minimalna temperatura powinna mieć długość od 1 do 2 znaków'
		]);	
		$this->form->max_temperatura = $v->validateFromPost('max_temperatura', [
            'trim' => true,
            'required' => false,
            'required_message' => 'Podaj maksymalną temperaturę',
            'min_length' => 1,
            'max_length' => 2,
            'validator_message' => 'Maksymalna temperatura powinna mieć długość od 1 do 2 znaków'
        ]);
		
        $this->form->swiatlo_id = $v->validateFromPost('swiatlo_id', [
            'trim' => true,
            'required' => false,
            'required_message' => "Wprowadź światło",
			'min_length' => 1,
            'max_length' => 1,
            'validator_message' => ""
			
        ]);
		$this->form->nawodnienie_id = $v->validateFromPost('nawodnienie_id', [
            'trim' => true,
            'required' => false,
            'required_message' => "Wprowadź nawodnienie",
			'min_length' => 1,
            'max_length' => 1,
            'validator_message' => ""
			
        ]);
		$this->form->rodzaj_id = $v->validateFromPost('rodzaj_id', [
            'trim' => true,
            'required' => false,
            'required_message' => "Wprowadź rodzaj",
			'min_length' => 1,
            'max_length' => 2,
            'validator_message' => ""
			
        ]);
		
		
		if ($v->isLastOK()) {
        }
        return !App::getMessages()->isError();
    }
    public function validateEdit() {
        $this->form->id = ParamUtils::getFromCleanURL(1, true, 'Błędne wywołanie aplikacji');
        return !App::getMessages()->isError();
    }

    public function action_roslinaNew() {
        $this->generateView();
    }
    public function action_roslinaEdit() {
        if ($this->validateEdit()) {
            try {
                $record = App::getDB()->get("roslina",['[>]rodzaj '=>['rodzaj_id' =>'id_rodzaj']], "*", [
                    "id_roslina" => $this->form->id
                ]);
                $this->form->id = $record['id_roslina'];
                $this->form->nazwa_naukowa = $record['nazwa_naukowa'];
                $this->form->nazwa_potoczna = $record['nazwa_potoczna'];
                $this->form->toksycznosc = $record['toksycznosc'];
				$this->form->min_temperatura = $record['min_temperatura'];
				$this->form->max_temperatura = $record['max_temperatura'];
				//$this->form->zdjecie = $record['zdjecie'];
				$this->form->swiatlo_id = $record['swiatlo_id'];
				$this->form->nawodnienie_id = $record['nawodnienie_id'];
				$this->form->rodzaj_id = $record['rodzaj_id'];
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas odczytu rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
        }
        $this->generateView();
    }

    public function action_roslinaDelete() {
        if ($this->validateEdit()) {

            try {
                App::getDB()->delete("roslina", [
                    "id_roslina" => $this->form->id
                ]);
                Utils::addInfoMessage('Pomyślnie usunięto rekord');
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas usuwania rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
        }

        App::getRouter()->forwardTo('roslinaList');
    }

    public function action_roslinaSave() {
		$zdjecie = $_FILES['zdjecie'];
		$tmp_name = $zdjecie['tmp_name'];
		$file_name = $zdjecie['name'];
		$img_upload_path = 'C:/xampp/htdocs/atlas_roslin/public/img/'.$file_name;
		move_uploaded_file($tmp_name, $img_upload_path);
        if ($this->validateSave()) {
            try {

                if ($this->form->id == '') {
                    $count = App::getDB()->count("roslina");
                    if ($count <= 40) {
                        App::getDB()->insert("roslina", [
						
                            "nazwa_naukowa" => $this->form->nazwa_naukowa,
                            "nazwa_potoczna" => $this->form->nazwa_potoczna,
                            "toksycznosc" => $this->form->toksycznosc,
							"min_temperatura" => $this->form->min_temperatura,
							"max_temperatura" => $this->form->max_temperatura,
							"swiatlo_id" =>$this->form->swiatlo_id,
							"nawodnienie_id" =>$this->form->nawodnienie_id,
							"rodzaj_id" =>$this->form->rodzaj_id,
							"zdjecie" =>$file_name
                        ]);
                    } else { 
                        Utils::addInfoMessage('Ograniczenie: Zbyt dużo rekordów. Aby dodać nowy usuń wybrany wpis.');
                        $this->generateView(); 
                        exit(); 
                    }
                } else {
                    App::getDB()->update("roslina", [
						
                        "nazwa_naukowa" => $this->form->nazwa_naukowa,
                        "nazwa_potoczna" => $this->form->nazwa_potoczna,
                        "toksycznosc" => $this->form->toksycznosc,
						"min_temperatura" => $this->form->min_temperatura,
						"max_temperatura" => $this->form->max_temperatura,

						"swiatlo_id" =>$this->form->swiatlo_id,
						"nawodnienie_id" =>$this->form->nawodnienie_id,
						"rodzaj_id" =>$this->form->rodzaj_id
                            ], [
                        "id_roslina" => $this->form->id
                    ]);
                }
                Utils::addInfoMessage('Pomyślnie zapisano rekord');
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił nieoczekiwany błąd podczas zapisu rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }

            App::getRouter()->forwardTo('roslinaList');
        } else {
            $this->generateView();
        }
    }

    public function generateView() {
        App::getSmarty()->assign('form', $this->form);
        App::getSmarty()->display('roslinaEdit.tpl');
    }

}
