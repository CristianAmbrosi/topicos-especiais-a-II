<?php 

	$notas = array(7.2, 5, 10, 5.5);
	$soma = 0;
	
	foreach ($notas as $nota) {
		$soma += $nota;
	}
	$tamNotas = count($notas);
	$media = $soma / $tamNotas;

	if($media >= 7.0){
		echo "Aluno passou $media! \n";
	} else if($media >= 5.0 && $media < 7.0){
		echo "Aluno está em recuperação $media! \n";
	} else {
		echo "Aluno está reprovado $media! \n";
	}


?>