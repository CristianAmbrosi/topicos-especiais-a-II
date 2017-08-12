<?php 

	$valorA = 3;
	$valorB = 8;

	if($valorA < $valorB){
		for($i=$valorA+1; $i<$valorB; $i++){
			echo $i." ";
		}
	} else {
		for($i=$valorB+1; $i<$valorA; $i++){
			echo $i." ";
		}
	}
	echo "\n";

?>