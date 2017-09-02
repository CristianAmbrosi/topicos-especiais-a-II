<?php 

include 'Filme.php';

class Ingresso
{
	private $horario;
	private $preco;

	public function setHorario($horario){
		$this->horario = $horario;
	}

	public function getHorario(){
		return $this->horario;
	}

	public function setPreco($preco){
		$this->preco = $preco;
	}

	public function getPreco(){
		return $this->preco;
	}

}