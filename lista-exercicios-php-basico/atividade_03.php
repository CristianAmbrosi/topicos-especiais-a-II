<?php 

	$valorA = 10;
	$valorB = 684;
	$valorC = 51;
	$valorD = 22;

	$soma = $valorA + $valorD;
	$divisao = $valorB / $valorC;

	if($soma > $divisao){
		echo "Resultado da soma ($soma) é maior que o resultado da divisão ($divisao).\n";
	} else if($soma > $divisao){
		echo "Resultado da soma ($soma) é menor que o resultado da divisão ($divisao).\n";
	} else {
		echo "Resultado da soma ($soma) é igual ao o resultado da divisão ($divisao).\n";
	}

?>