<?php 
	
include_once '../Persistence/ConnectionDB.php';

class ProdutoDao
{
	private $connection = null;

	public function __construct(){
		$this->connection = ConnectionDB::getInstance();
	}

	public function insertProduto($produto){
		try{
			$status = $this->connection->prepare(
					"INSERT INTO produtos(id, descricao, codigo_referencia, marca) VALUES(null, ?, ?, ?)"
			);

		$status->bindValue(1, $produto->descricao);
		$status->bindValue(2, $produto->codReferencia);
		$status->bindValue(3, $produto->marca);
		$status->execute();

		// Encerra a conexão com o banco
		$this->connection = null;
		} catch(PDOException $e){
			echo "Ocorreram erros ao inserrir novo produto!" . $e->getMessage();
			exit();
		}
	}

}

