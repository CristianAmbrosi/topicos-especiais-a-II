<?php

class Telefone
{
	private $numero;
	// private $cliente;
	private $totalLigacoes;

	public function __construct($numero/*, $cliente*/){
		$this->setNumero($numero);
		// $this->setCliente($cliente);
		$this->setTotalLigacoes(0);
	}

	public function setNumero($numero){
		$this->numero = $numero;
	}

	public function getNumero(){
		return $this->numero;
	}

	// public function setCliente($cliente){
	// 	$this->cliente = $cliente;
	// }

	// public function getCliente(){
	// 	return $this->cliente;
	// }

	public function setTotalLigacoes($totalLigacoes){
		$this->totalLigacoes = $totalLigacoes;
	}

	public function getTotalLigacoes(){
		return $this->totalLigacoes;
	}

	public function fazerLigacao($tempo, $tipo){
		$custoTotal = 0;
		$ligacaoComum = 0.50;
		$ligacaoCelular  = 1.20;
		
		if($tipo == "comum")
			$custoTotal = $tempo * $ligacaoComum; 
		else if($tipo == "celular")
			$custoTotal = $tempo * $ligacaoCelular; 

		return $this->setTotalLigacoes($this->getTotalLigacoes() + $custoTotal);
	}

}