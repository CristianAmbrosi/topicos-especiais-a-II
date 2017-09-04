<?php

	session_start();

	include_once '../Model/UserModel.php';
	include_once '../Include/UserValidate.php';
	include_once '../Dao/UserDao.php';

	$usuario 	= $_POST['txtUser'];
	$nome 		= $_POST['txtNome'];
	$sobrenome = $_POST['txtSobrenome'];
	$idade 		= $_POST['txtIdade'];
	$email 		= $_POST['txtEmail'];
	$senha 		= $_POST['pwdSenha'];

	if((!empty($usuario)) && (!empty($nome)) && (!empty($sobrenome)) && 
		(!empty($idade)) && (!empty($email))  && (!empty($senha))){

		$erros = array();

		if(!UserValidate::testarIdade($idade)){
			$erros[] = "Idade inválida!";
		}
		if(!UserValidate::testarEmail($email)){
			$erros[] = "E-mail inválido!";
		}

		if(empty($erros)){
			$user = new UserModel();
			$user->user = $usuario;
			$user->nome = $nome;
			$user->sobrenome = $sobrenome;
			$user->idade = $idade;
			$user->password = $senha;
			$user->email = $email;

			$userDao = new UserDao();
			$userDao->insertUser($user);

			$_SESSION['usuario'] = $user->user;
			$_SESSION['mail'] = $user->email;
			header("Location: ../View/UserViewResult.php");
		} else {
			$err = serialize($erros);
			$_SESSION['erros'] = $err;
			header("Location: ../View/UserViewError.php");
		}
	} else {
		echo "Informe todos campos!";
	}

		
