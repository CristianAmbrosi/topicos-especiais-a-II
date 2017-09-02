<?php 
	
	session_start();

	$usuario = $_SESSION['user'];
	$email =  $_SESSION['mail'];

?>

<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de Usuário efetuado</title>
</head>
<body>
	<h1>Resultado</h1>
	<?php 
		if(isset($usuario) && isset($email)){
			echo '<br />Usuário: ' . $usuario .
				'<br />E-mail: ' . $email;
			//unset($usuario); // Destroi os dados, não sessão
			//unset($email);
		}
	?>
</body>
</html>