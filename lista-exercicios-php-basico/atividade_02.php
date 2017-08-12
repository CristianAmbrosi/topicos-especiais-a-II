<?php 
	
	$valores = array(-98, 101, 0, -300, 415, 51, 10, 0, 87, -63, 88);

	foreach ($valores as $valor) {
		if($valor > 0){
			echo "Positivo. \n";
		} else if($valor < 0){
			echo "Negativo. \n";
		} else {
			echo "Igual a 0. \n";
		}
	}

?>