<?php

	session_start();

	include_once '../Model/ProdutoModel.php';
	include_once '../Include/ProdutoValidate.php';
	include_once '../Dao/ProdutoDao.php';

	$descri 		= $_POST['descricao'];
	$codRef 	= $_POST['codRef'];
	$marca 	= $_POST['marca'];

	if((!empty($descri)) && (!empty($codRef)) && (!empty($marca))){

		$erros = array();

		if(!ProdutoValidate::testarReferencia($codRef)){
			$erros[] = "Código de Referência do produto errado. <b>Somente números!</b><br />";
		}

		if(empty($erros)){
			$prod = new ProdutoModel();
			$prod->descricao = $descri;
			$prod->codReferencia = $codRef;
			$prod->marca = $marca;

			$prodDao = new ProdutoDao();
			$prodDao->insertProduto($prod);

			$_SESSION['descricao'] = $prod->descricao;
			$_SESSION['codigoRef'] = $prod->codReferencia;
			$_SESSION['marca'] = $prod->marca;
			header("Location: ../View/ProdutoViewResult.php");
		} else {
			$err = serialize($erros);
			$_SESSION['erros'] = $err;
			header("Location: ../View/ProdutoViewError.php");
		}
	} else {
		echo "Informe todos campos!";
	}

		
