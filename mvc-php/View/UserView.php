<!DOCTYPE html>
<html lang="PT-br">
<head>
	<meta charset="utf-8">
	<title>Cadastro de Usuário</title>
</head>
<body>

	<form method="POST" action="../Controller/UserController.php" name="cadUser">
		<input type="text" name="txtUser" id="txtUser" placeholder="Usuário"><br />
		<input type="text" name="txtNome" id="txtNome" placeholder="Nome"><br />
		<input type="text" name="txtSobrenome" id="txtSobrenome" placeholder="Sobrenome"><br />
		<input type="email" name="txtEmail" id="txtEmail" placeholder="emai@email.com"><br />
		<input type="text" name="txtIdade" id="txtIdade" placeholder="Idade"><br />
		<input type="password" name="pwdSenha" id="pwdSenha" placeholder="Senha"><br />
		<input type="submit" name="btCadastrar" id="btCadastrar" placeholder="Cadastrar"><br />
		<input type="reset" name="btLimpar" id="btLimpar" placeholder="Limpar">
	</form>

</body>
</html>