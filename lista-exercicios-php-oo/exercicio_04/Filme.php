<?php 

class Filme
{
	private $titulo;
	private $genero;
	private $diretor;
	private $atorPrinc;

	public function __construct($titulo, $genero, $diretor, $atorPrinc){
		$this->setTitulo($titulo);
		$this->setGenero($genero);
		$this->setDiretor($diretor);
		$this->setAtorPrincipal($atorPrinc);
	}

	public function setTitulo($titulo){
		$this->titulo = $titulo;
	}

	public function getTitulo(){
		return $this->titulo;
	}

	public function setGenero(Genero $genero){
		$this->genero = $genero;
	}

	public function getGenero() : Genero{
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