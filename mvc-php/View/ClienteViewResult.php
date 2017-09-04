<?php 
	
	session_start();

	$nome_compl 	= $_SESSION['nome-completo'];
	$observacao 	= $_SESSION['observacao'];
	$celular = $_SESSION['celular'];
	$cidade = $_SESSION['cidade'];
	$estado = $_SESSION['estado'];
	$email 	= $_SESSION['email'];
	$cpf 	= $_SESSION['cpf'];

?>

<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de Cliente efetuado</title>
</head>
<body>
	<h1>Resultado</h1>
	<?php 
		if(isset($nome_compl) && isset($observacao) && isset($celular) && isset($cidade) &&
			isset($estado) && isset($email) && isset($cpf)){

			echo '<br /><b>Nome do Cliente:</b> ' . $nome_compl .
				'<br /><b>Celular:</b> ' . $celular .
				'<br /><b>Email:</b> ' . $email .
				'<br /><b>Cidade/Estado:</b> ' . $cidade . " / " . $estado .
				'<br /><b>CPF:</b> ' . $cpf .
				'<br /><b>Observação:</b> ' . $observacao;
			
			unset($nome_compl);
			unset($observacao);
			unset($celular);
			unset($cidade);
			unset($estado);
			unset($email);
			unset($cpf);
		}
	?>
</body>
</html>