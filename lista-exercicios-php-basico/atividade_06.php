<?php 

	$valoresGasolina = array(5.658, 3.640, 6.999, 3.170, 3.520);
	$valorAlcool = 3.899;

	foreach ($valoresGasolina as $valorGasolina) {
		$valorGasolina *= 0.7;

		if($valorGasolina > $valorAlcool){
			echo "Abasteça com Alcool $valorGasolina! \n";
		} else {
			echo "Abasteça com Gasolina $valorGasolina! \n";
		}
		
	}


?>