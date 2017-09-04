<?php 

class ClienteValidate
{
	public static function testarNumero($paramNum){
		if(is_numeric($paramNum)){
			return true;
		} else {
			return false;
		}
	}
	
	public static function testarEmail($paramEmail){
		$sintaxe = '#^[\w.-]+@[\w.-]+\.[a-zA-Z]{2,6}$#';
		if(preg_match($sintaxe, $paramEmail)){
			return true;
		} else {
			return false;
		}
	}

}
	