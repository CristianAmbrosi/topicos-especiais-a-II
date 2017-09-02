<!DOCTYPE html>
<html lang="PT-br">
<head>
	<meta charset="utf-8">
	<title>Cadastro de Produto</title>
</head>
<body>

	<form action="../Controller/UserController.php" method="POST" name="cadUser">
		<input type="text" name="descricao" id="descricao" placeholder="Decrição"><br />
		<input type="text" name="codRef" id="codRef" placeholder="Código de Referência"><br />
		<input type="text" name="marca" id="marca" placeholder="Marca"><br />
		<input type="submit" name="btCadastrar" id="btCadastrar" placeholder="Cadastrar"><br />
		<input type="reset" name="btLimpar" id="btLimpar" placeholder="Limpar">
	</form>

</body>
</html>