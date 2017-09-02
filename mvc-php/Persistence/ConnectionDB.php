<?php  
	
 class ConnectionDB extends PDO
 {

 	private static $instance = null;

 	public function ConnectionDB($dsn, $usuario, $senha){
 		// Constructor da classe pai (parent) -> PDO
 		parent::__construct($dsn, $usuario, $senha);
 	}

 	public static function getInstance(){
		
		$config = array(
			'host'  		=> 'localhost',
			'dbname' 	=> 'ecomm',
			'user'   		=> 'root',
			'pass'   		=> ''
		);

 		if(!isset(self::$instance)){
 			try{
 				// Cria uma conexão e retorna a instância dela
 				self::$instance = new ConnectionDB(
					'mysql:host=' . $config['host'] . ';dbname=' . $config['dbname'],
					$config['user'],
					$config['pass']
				);
                		self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 				echo "Conectado ao banco de dados!";
 			} catch(Exception $e){	
 				echo "Ocorreram erros ao tentar conectar no banco de dados!";
 				echo "$e";
 				exit();
 			}
 		}
 		return self::$instance;
 	}

 }

