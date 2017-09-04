<?php 

class ProdutoValidate
{
	public static function testarReferencia($paramIdade){
		if(is_numeric($paramIdade)){
			return true;
		} else {
			return false;
		}
	}

}
	