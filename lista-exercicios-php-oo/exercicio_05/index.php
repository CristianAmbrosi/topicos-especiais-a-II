<?php 

	include_once 'Telefone.php';
	include_once 'Cliente.php';

	$cli1 = new Cliente("Teste_01", "6486652", "Rua 1");
	$tel1 = new Telefone("(54) 9 9999-9999", $cli1);

	$cli2 = new Cliente("Teste_02", "564513546", "Rua 2");
	$tel2 = new Telefone("(45) 8 8888-8888", $cli2);

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Tarifas de Celular</title>
</head>
<body>
	<?php 

		echo "<strong>***** Ligação 01 *****</strong><br />";
		echo "<strong>Cliente: </strong>" . $tel1->getCliente()->getNome() . "<br />";
		echo "<strong>RG: </strong>" . $tel1->getCliente()->getRg() . "<br />";
		echo "<strong>Endereço: </strong>" . $tel1->getCliente()->getEndereco() . "<br />";
		echo "<strong>Número de Telefone: </strong>" . $tel1->getNumero() . "<br />";
		$tel1->fazerLigacao(09.17, "comum");
		echo "<strong>Valor da Ligação: </strong>R$ " . $tel1->getTotalLigacoes() . "<br />";

		echo "<hr />";

		echo "<strong>***** Ligação 02 *****</strong><br />";
		echo "<strong>Cliente: </strong>" . $tel2->getCliente()->getNome() . "<br />";
		echo "<strong>RG: </strong>" . $tel2->getCliente()->getRg() . "<br />";
		echo "<strong>Endereço: </strong>" . $tel2->getCliente()->getEndereco() . "<br />";
		echo "<strong>Número de Telefone: </strong>" . $tel2->getNumero() . "<br />";
		$tel2->fazerLigacao(17.09, "celular");
		echo "<strong>Valor da Ligação: </strong>R$ " . $tel2->getTotalLigacoes() . "<br />";

	?>

</body>
</html>