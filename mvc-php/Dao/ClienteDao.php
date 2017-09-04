<?php 
	
include_once '../Persistence/ConnectionDB.php';

class ClienteDAO
{
	private $connection = null;

	public function __construct(){
		$this->connection = ConnectionDB::getInstance();
	}

	public function insertCliente($cliente){
		try{
			$status = $this->connection->prepare(
					"INSERT INTO clientes(id, nome_completo, data_nascimento, cpf, celular, email, cep, "
					. "endereco, numero, complemento, bairro, cidade, estado, observacao, senha)"
					. "VALUES(null, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)"
			);

		$status->bindValue(1, $cliente->nome_completo);
		$status->bindValue(2, $cliente->data_nascimento);
		$status->bindValue(3, $cliente->cpf);
		$status->bindValue(4, $cliente->celular);
		$status->bindValue(5, $cliente->email);
		$status->bindValue(6, $cliente->cep);
		$status->bindValue(7, $cliente->endereco);
		$status->bindValue(8, $cliente->numero);
		$status->bindValue(9, $cliente->complemento);
		$status->bindValue(10, $cliente->bairro);
		$status->bindValue(11, $cliente->cidade);
		$status->bindValue(12, $cliente->estado);
		$status->bindValue(13, $cliente->observacao);
		$status->bindValue(14, $cliente->senha);
		$status->execute();

		// Encerra a conexão com o banco
		$this->connection = null;
		} catch(PDOException $e){
			echo "Ocorreram erros ao inserrir novo cliente!" . $e->getMessage();
			exit();
		}
	}

}

