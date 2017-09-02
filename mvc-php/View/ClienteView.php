<!DOCTYPE html>
<html lang="PT-br">
<head>
	<meta charset="utf-8">
	<title>Cadastro de Cliente</title>
</head>
<body>

	<form action="../Controller/UserController.php" method="POST" name="cadUser">
		<input type="text" name="nomeCompleto" id="nomeCompleto" placeholder="Nome Completo"><br />
		<input type="date" name="dataNasc" id="dataNasc" placeholder="Data de Nascimento"><br />
		<input type="text" name="cpf" id="cpf" placeholder="CPF"><br />
		<input type="text" name="celular" id="celular" placeholder="Celular"><br />
		<input type="email" name="eMail" id="eMail" placeholder="E-mail"><br />
		<input type="text" name="cep" id="cep" placeholder="CEP"><br />
		<input type="text" name="endereco" id="endereco" placeholder="Endereço"><br />
		<input type="text" name="numero" id="numero" placeholder="Número"><br />
		<input type="text" name="complemento" id="complemento" placeholder="Complemento"><br />
		<input type="text" name="bairro" id="bairro" placeholder="Bairro"><br />
		<input type="text" name="cidade" id="cidade" placeholder="Cidade"><br />
		<input type="text" name="estado" id="estado" placeholder="Estado"><br />
		<textarea type="text" name="observacao" id="observacao" placeholder="Observação"></textarea><br />
		<input type="password" name="pwdSenha" id="pwdSenha" placeholder="Senha"><br />
		<input type="submit" name="btCadastrar" id="btCadastrar" placeholder="Cadastrar"><br />
		<input type="reset" name="btLimpar" id="btLimpar" placeholder="Limpar">
	</form>

</body>
</html>