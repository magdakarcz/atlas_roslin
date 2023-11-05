<?php
namespace app\transfer;
class User{
	public $login;
	public $rola;
	
	public function __construct($login, $rola){
		$this->login = $login;
		$this->rola = $rola;		
	}	
}