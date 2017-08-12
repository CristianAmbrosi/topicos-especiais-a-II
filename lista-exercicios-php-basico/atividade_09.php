<?php 

	function fatorial($valor){
		$num = 1;
		for($i=$valor; $i>=1; $i--){
			$num *= $i;
			if($i != 1){
				echo $i." * ";
			} else {
				echo $i;
			}
		}
		return " = ".$num."\n";
	}

	echo fatorial(6);
	echo fatorial(4);

?>