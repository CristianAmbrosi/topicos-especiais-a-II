<?php

	include_once "Celular.php";

	$iPhone6 = new Celular("iPhone6", "Apple", "4.7", "16 GB", "1 GB", "R$ 1.489,00");
	$galaxiS7 = new Celular("Galaxi S7", "Samasung", "5.1", "64 GB", "4 GB", "R$ 1.847,00");
	$motoX = new Celular("Moto X", "Motorolo", "5.5", "16 GB", "4 GB", "R$ 1.199,99");

?>
	
<div style="max-width: 800px; margin: 0 auto;">
	<table style="width: 100%; text-align: center;">
		<thead>
			<tr>
				<th>Nome</th>
				<th>Marca</th>
				<th>Tamanho da tela</th>
				<th>Memória Interna (ROM)</th>
				<th>Memória RAM</th>
				<th>Preço</th>
			</tr>
		<thead>
		<tbody>
			<?php $iPhone6->imprime(); ?>
			<?php $galaxiS7->imprime(); ?>
			<?php $motoX->imprime(); ?>
		<tbody>
	</table>
</div>	
