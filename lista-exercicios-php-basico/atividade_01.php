<?php 
	
	$valores = array(98, 101, 20, 300, 415, 51, 10, 654, 87, 63, 88);

	foreach ($valores as $valor) {
		if($valor > 100){
			echo "O valor é maior que 100 \n";
		} else {
			echo "O valor é menor que 100 \n";
		}
	}

?>