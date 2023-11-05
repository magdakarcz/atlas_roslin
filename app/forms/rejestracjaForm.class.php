<?php

namespace app\forms;

class rejestracjaForm
{
	
    public $login;
    public $password;
    public $password_repeat;

    function checkIsNull() {
        foreach ($this as $key => $value) {
            if(!isset($value)) return false;
            else return true;
        }
    }
}