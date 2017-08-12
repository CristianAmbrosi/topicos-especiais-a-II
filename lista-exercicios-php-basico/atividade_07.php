<?php 

	$altura = 1.70;

	$sexo = array(
		0 => 'M',
		1 => 'S'
	);

	$randSexo = mt_rand(0, count($sexo)-1);

	switch ($randSexo) {
		case 0:
			$imc = (72.7 * $altura) - 58;
			echo "Para homens: $imc Kg. \n";
			break;
		case 1:
			$imc = (62.1 * $altura) - 44;
			echo "Para mulheres: $imc Kg. \n";
			break;
	}

?>