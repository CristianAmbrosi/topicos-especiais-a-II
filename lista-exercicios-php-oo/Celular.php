<?php 
	
class Celular
{
	public $nome;
	public $marca;
	public $tamanho_tela;
	public $memoria_interna;
	public $memoria_ram;
	public $preco;

	public function Celular($nome, $marca, $tamanho_tela, $memoria_interna, $memoria_ram, $preco){
		$this->nome = $nome;
		$this->marca = $marca;
		$this->tamanho_tela = $tamanho_tela;
		$this->memoria_interna = $memoria_interna;
		$this->memoria_ram = $memoria_ram;
		$this->preco = $preco;
	}

	public function imprime(){
		echo '<tr>';
		echo '<td>'.$this->nome.'</td>';
		echo '<td>'.$this->marca.'</td>';
		echo '<td>'.$this->tamanho_tela.'</td>';
		echo '<td>'.$this->memoria_interna.'</td>';
		echo '<td>'.$this->memoria_ram.'</td>';
		echo '<td>'.$this->preco.'</td>';
		echo '<tr>';
	}

}

