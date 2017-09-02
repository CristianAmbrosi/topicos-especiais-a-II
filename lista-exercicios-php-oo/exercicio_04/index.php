<?php  

	include_once 'Ingresso.php';

	$ingresso = new Ingresso();

	$ingresso->setTitulo();
	$ingresso->setDiretor();
	$ingresso->setAtorPrincipal();
	$ingresso->setHorario();
	$ingresso->setPreco();



	echo $ingresso->getTitulo(). "<br />";
	echo $ingresso->getDiretor(). "<br />";
	echo $ingresso->getAtorPrincipal(). "<br />";
	echo $ingresso->getHorario() . "<br />";
	echo $ingresso->getPreco(). "<br />";

?>

<!DOCTYPE html>
<html>
<head>
	<title>Ingressos</title>
	
	
</head>
<body>



</body>
</html>