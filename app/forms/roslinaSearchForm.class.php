<?php

namespace app\forms;

class roslinaSearchForm {
	public $nazwa_naukowa;
	
	function checkIsNull() {
        foreach ($this as $key => $value) {
            if(!isset($value)) return false;
            else return true;
        }
    }
} 