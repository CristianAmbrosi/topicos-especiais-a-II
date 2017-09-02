<?php 
	
	include_once 'Calculadora.php';

	$calc = new Calculadora();
	$valores = array(71, 10, 87, 2);
		
	echo $calc->adicicao($valores);
	echo $calc->subtracao($valores);
	echo $calc->multiplicacao($valores);
	echo $calc->divisao($valores);

?>