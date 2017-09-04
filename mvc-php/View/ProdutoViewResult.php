<?php 
	
	session_start();

	$descricao 	= $_SESSION['descricao'];
	$referencia =  $_SESSION['codigoRef'];
	$marca 	=  $_SESSION['marca'];

?>

<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de Produto efetuado</title>
</head>
<body>
	<h1>Resultado</h1>
	<?php 
		if(isset($descricao) && isset($referencia) && isset($marca)){
			echo '<br /><b>Descrição do Produto:<b> ' . $descricao .
				'<br /><b>Referência:<b> ' . $referencia .
				'<br /><b>Marca:<b> ' . $marca;
			unset($descricao);
			unset($referencia);
			unset($marca);
		}
	?>
</body>
</html>