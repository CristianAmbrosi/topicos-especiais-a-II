<?php 

class ProdutoValidate
{
	public static function testarReferencia($paramRef){
		if(is_numeric($paramRef)){
			return true;
		} else {
			return false;
		}
	}

}
	