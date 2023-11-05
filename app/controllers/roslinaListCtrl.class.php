<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use app\forms\roslinaSearchForm;

class roslinaListCtrl {

    private $form; 
    private $records; 

    public function __construct() {
        $this->form = new roslinaSearchForm();
    }

    public function validate() {
        $this->form->nazwa_naukowa = ParamUtils::getFromRequest('sf_nazwa_naukowa');

        return !App::getMessages()->isError();
    }

    public function load_data() {

        $this->validate();

        $search_params = []; 
       if (isset($this->form->nazwa_naukowa) && strlen($this->form->nazwa_naukowa) > 0) {
            $search_params['nazwa_naukowa[~]'] = $this->form->nazwa_naukowa . '%'; 
        }
        $num_params = sizeof($search_params);
        if ($num_params > 1) {
            $where = ["AND" => &$search_params];
        } else {
            $where = &$search_params;
        }
        $where ["ORDER"] = "nazwa_naukowa";

        try {
            $this->records = App::getDB()->select("roslina", ['[>]rodzaj '=>['rodzaj_id' =>'id_rodzaj'], '[>]swiatlo' => ['swiatlo_id' => 'id_swiatlo'],
		'[>]nawodnienie' => ['nawodnienie_id' => 'id_nawodnienie']],
			[
                "roslina.id_roslina",
                "roslina.nazwa_naukowa",
                "roslina.nazwa_potoczna",
                "roslina.toksycznosc",
				"roslina.min_temperatura",
				"roslina.max_temperatura",
				"roslina.zdjecie",
				"roslina.swiatlo_id",
				"roslina.nawodnienie_id",
				"roslina.rodzaj_id",
				"rodzaj.nazwa_rodzaj"
                    ], $where);
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }

    }

    public function action_roslinaList() {
        $this->load_data();
        App::getSmarty()->assign('searchForm', $this->form); 
        App::getSmarty()->assign('roslina', $this->records);  
        App::getSmarty()->display('roslinaListFullPage.tpl');
    }

    public function action_roslinaListPart() {
        $this->load_data();
        App::getSmarty()->assign('searchForm', $this->form);
        App::getSmarty()->assign('roslina', $this->records);
        App::getSmarty()->display('roslinaListTable.tpl');
    }
}
