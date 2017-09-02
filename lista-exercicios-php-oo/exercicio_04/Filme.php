<?php 

// include 'Genero.php';

class Filme
{
	private $titulo;
	private $genero
	private $diretor;
	private $atorPrinc;

	public function setTitulo($titulo){
		$this->titulo = $titulo;
	}

	public function getTitulo(){
		return $this->titulo;
	}

	public function setGenero($genero){
		$this->genero = $genero;
	}

	public function getGenero(){
		return $this->genero;
	}

	public function setDiretor($diretor){
		$this->diretor = $diretor;
	}

	public function getDiretor(){
		return $this->diretor;
	}

	public function setAtorPrincipal($atorPrinc){
		$this->atorPrinc = $atorPrinc;
	}

	public function getAtorPrincipal(){
		return $this->atorPrinc;
	}

}