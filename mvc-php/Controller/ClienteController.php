<?php

	session_start();

	include_once '../Model/ClienteModel.php';
	include_once '../Include/ClienteValidate.php';
	include_once '../Dao/ClienteDao.php';

	$nomeCompleto = $_POST['nomeCompleto'];
	$complemento 	= $_POST['complemento'];
	$observacao	= $_POST['observacao'];
	$celular 	= $_POST['celular'];
	$dataNasc	= $_POST['dataNasc'];
	$email 		= $_POST['eMail'];
	$cep 		= $_POST['cep'];
	$endereco 	= $_POST['endereco'];
	$numero 	= $_POST['numero'];
	$bairro 		= $_POST['bairro'];
	$cidade 	= $_POST['cidade'];
	$estado 	= $_POST['estado'];
	$senha 		= $_POST['pwdSenha'];
	$cpf = $_POST['cpf'];

	if((!empty($nomeCompleto)) && (!empty($complemento)) && (!empty($observacao)) && (!empty($celular)) &&
		(!empty($dataNasc)) && (!empty($email)) && (!empty($cep)) && (!empty($endereco)) && (!empty($numero)) && 
		(!empty($bairro)) && (!empty($cidade)) && (!empty($estado)) && (!empty($senha)) && (!empty($cpf))  ){

		$erros = array();

		if(!ClienteValidate::testarEmail($email)){
			$erros[] = "E-mail inválido!";
		}

		if(!ClienteValidate::testarNumero($numero)){
			$erros[] = "Número inválido! <b>Somente números!</b>";
		}

		if(empty($erros)){
			$cliente = new ClienteModel();
			$cliente->nome_completo = $nomeCompleto;
			$cliente->data_nascimento = $dataNasc;
			$cliente->cpf = $cpf;
			$cliente->celular = $celular;
			$cliente->email = $email;
			$cliente->cep = $cep;
			$cliente->endereco = $endereco;
			$cliente->numero = $numero;
			$cliente->complemento = $complemento;
			$cliente->bairro = $bairro;
			$cliente->cidade = $cidade;
			$cliente->estado = $estado;
			$cliente->observacao = $observacao;
			$cliente->senha = $senha;

			$clienteDao = new ClienteDAO();
			$clienteDao->insertCliente($cliente);

			$_SESSION['nome-completo'] = $cliente->nome_completo;
			$_SESSION['cpf'] = $cliente->email;
			$_SESSION['celular'] = $cliente->cpf;
			$_SESSION['email'] = $cliente->email;
			$_SESSION['cidade'] = $cliente->cidade;
			$_SESSION['estado'] = $cliente->estado;
			$_SESSION['observacao'] = $cliente->observacao;
			header("Location: ../View/ClienteViewResult.php");
		} else {
			$err = serialize($erros);
			$_SESSION['erros'] = $err;
			header("Location: ../View/ClienteViewError.php");
		}
	} else {
		echo "Informe todos campos!";
	}

		
