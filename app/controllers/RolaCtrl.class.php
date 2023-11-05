<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use core\Validator;
use app\forms\rolaForm;

class rolaCtrl {

    private $form; 
	private $record;
    public function __construct() {
        $this->form = new rolaForm();
    }

 public function load_data() {
        try {
            $this->records = App::getDB()->select("uzytkownik", ['[>]pozwolenie '=>['id_uzytkownik' =>'uzytkownik_id'],
		],
			[	
						 'pozwolenie.id',
					'uzytkownik.id_uzytkownik',
                      'pozwolenie.rola_id',
					    'uzytkownik.login',
						
                    ],);
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }

    }

    public function action_rola() {
        $this->load_data();
        //App::getSmarty()->assign('searchForm', $this->form); 
        App::getSmarty()->assign('uzytkownik', $this->records);  
        App::getSmarty()->display('rolaView.tpl');
    }

    public function action_rolaEdit() {
    try {
        $record = App::getDB()->get("pozwolenie", "*", [
            "id" => $this->form->pozwolenie_id
        ]);

        if ($record) {
           
            $this->form->pozwolenie_id = $record['id'];
            $this->form->rola_id = $record['rola_id'];
			 $this->form->uzytkownik_id = $record['uzytkownik_id'];
        } else {
            Utils::addErrorMessage('Rekord nie istnieje');
        }
    } catch (\PDOException $e) {
        Utils::addErrorMessage('Wystąpił błąd podczas odczytu rekordu');
        if (App::getConf()->debug) {
            Utils::addErrorMessage($e->getMessage());
        }
    }
    
    $this->generateView();
}

    public function action_rolaDelete() {

            try {
                App::getDB()->delete("uzytkownik", [
                    "id_uzytkownik" => $this->form->id_uzytkownik
                ]);
                Utils::addInfoMessage('Pomyślnie usunięto rekord');
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas usuwania rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }

        App::getRouter()->forwardTo('rola');
    }

    public function action_rolaSave() {
            try {

                    App::getDB()->update("pozwolenie", [
						
                        "rola_id" => $this->form->rola_id,
						 "id" => $this->form->pozwolenie_id

                            ], [
                        "id" => $this->form->pozwolenie_id
                    ]);
                
                Utils::addInfoMessage('Pomyślnie zapisano rekord');
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił nieoczekiwany błąd podczas zapisu rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }

            App::getRouter()->forwardTo('rola');
       
            $this->generateView();
       
    }

    public function generateView() {
        App::getSmarty()->assign('form', $this->form);
        App::getSmarty()->display('rolaEdit.tpl');
    }

}
