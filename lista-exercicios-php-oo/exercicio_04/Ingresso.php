<?php 

class Ingresso
{
	private $filme;
	private $horario;
	private $preco;

	public function __construct($filme, $horario){
		$this->setFilme($filme);
		$this->setHorario($horario);
		$this->horarioFilme();
	}

	public function setFilme(Filme $filme){
		$this->filme = $filme;
	}

	public function getFilme() : Filme{
		return $this->filme;
	}

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

	public function horarioFilme(){
		$horario = $this->getHorario();
		if($horario >= 20.00 && $horario <= 24.00){
			$this->setPreco(22.00);
		} else {
			$this->setPreco(16.00);
		}
	}

}