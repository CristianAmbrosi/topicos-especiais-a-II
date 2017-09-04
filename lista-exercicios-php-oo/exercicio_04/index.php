<?php  

	include_once 'Genero.php';
	include_once 'Filme.php';
	include_once 'Ingresso.php';

	$genero = new Genero("Ficção Científica", "L - Livre para todos os públicos");
	$filme = new Filme("O Gigante de Ferro", $genero, "Brad Bird", "Gigante de Ferro");
	$ingresso = new Ingresso($filme, 18);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Ingressos</title>
</head>
<body>

	<?php  

		echo $sessao = "<strong>***** Sessão de Filme *****</strong><br />" .
			"<strong>Nome do Filme: </strong>" . $ingresso->getFilme()->getTitulo() . "<br />" .
			"<strong>Gênero: </strong>" . $ingresso->getFilme()->getGenero()->getNomeGenero() . "<br />" .
			"<strong>Classificação: </strong>" . $ingresso->getFilme()->getGenero()->getClassificacao() . "<br />" .
			"<strong>Diretor: </strong>" . $ingresso->getFilme()->getDiretor() . "<br />" .
			"<strong>Ator principal: </strong>" . $ingresso->getFilme()->getAtorPrincipal() . "<br />" .
			"<strong>Horário da sessão: </strong>" . $ingresso->getHorario() . " horas<br />" .
			"<strong>Preço: </strong> R$ " . $ingresso->getPreco() . "<br />";

	?>

</body>
</html>