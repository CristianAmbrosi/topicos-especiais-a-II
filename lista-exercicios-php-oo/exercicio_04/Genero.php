<?php 

class Genero
{
	private $nomeGenero;
	private $classificacao;

	public function setNomeGenero($nomeGenero){
		$this->nomeGenero = $nomeGenero;
	}

	public function getNomeGenero(){
		return $this->nomeGenero;
	}

	public function setClassificacao($classificacao){
		$this->classificacao = $classificacao;
	}

	public function getClassificacao(){
		return $this->classificacao;
	}
		
}