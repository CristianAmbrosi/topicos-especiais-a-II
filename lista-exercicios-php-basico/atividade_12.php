<?php 
	$num = 0;
	for($i=0; $i<=1000; $i++){
		if(($i%8) == 0){
			$num += $i;
		}
	}
	echo "$num \n";

?>