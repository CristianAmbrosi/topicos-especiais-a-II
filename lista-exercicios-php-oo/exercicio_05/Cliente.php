<?php 

class Cliente
{
	private $nome;
	private $rg;
	private $endereco;

	public function __construct($nome, $rg, $endereco){
		$this->setNome($nome);
		$this->setRg($rg);
		$this->setEndereco($endereco);
	}

	public function setNome($nome){
		$this->nome = $nome;
	}

	public function getNome(){
		return $this->nome;
	}

	public function setRg($rg){
		$this->rg = $rg;
	}

	public function getRg(){
		return $this->rg;
	}

	public function setEndereco($endereco){
		$this->endereco = $endereco;
	}

	public function getEndereco(){
		return $this->endereco;
	}

}
