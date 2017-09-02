<?php 

	class ClienteModel
	{
		private $nomeCompleto;
		private $dataNasc;
		private $cpf;
		private $email;
		private $cep;
		private $endereco;
		private $numero;
		private $complemento;
		private $bairro;
		private $cidade;
		private $estado;
		private $observacao;
		private $senha;

	public function __construct(){}

	public function __set($propriedade, $valor){
		$this->$propriedade = $valor;
	}

	public function __get($propriedade){
		return $this->$propriedade;
	}	

}