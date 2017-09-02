<?php 

	include_once 'Telefone.php';
	include_once 'Cliente.php';

	$cli1 = new Cliente("Teste_01", "6486652", "Rua 1");
	$tel1 = new Telefone("(54) 9 9999-9999");

	$cli2 = new Cliente("Teste_02", "564513546", "Rua 2");
	$tel2 = new Telefone("(45) 8 8888-8888");

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Tarifas de Celular</title>
</head>
<body>
	<?php 

		echo "<strong>***** Ligação 01 *****</strong><br />";
		echo "<strong>Cliente: </strong>" . $cli1->getNome() . "<br />";
		echo "<strong>RG: </strong>" . $cli1->getRg() . "<br />";
		echo "<strong>Endereço: </strong>" . $cli1->getEndereco() . "<br />";
		echo "<strong>Número de Telefone: </strong>" . $tel1->getNumero() . "<br />";
		$tel1->fazerLigacao(09.17, "comum");
		echo "<strong>Valor da Ligação: </strong>R$ " . $tel1->getTotalLigacoes() . "<br />";

		echo "<hr />";

		echo "<strong>***** Ligação 02 *****</strong><br />";
		echo "<strong>Cliente: </strong>" . $cli2->getNome() . "<br />";
		echo "<strong>RG: </strong>" . $cli2->getRg() . "<br />";
		echo "<strong>Endereço: </strong>" . $cli2->getEndereco() . "<br />";
		echo "<strong>Número de Telefone: </strong>" . $tel2->getNumero() . "<br />";
		$tel2->fazerLigacao(17.09, "celular");
		echo "<strong>Valor da Ligação: </strong>R$ " . $tel2->getTotalLigacoes() . "<br />";

	?>

</body>
</html>