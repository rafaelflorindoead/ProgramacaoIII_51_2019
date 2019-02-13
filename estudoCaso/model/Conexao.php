<?php

class Conexao
{
	public $connection;
	public $local;
	public $user;
	public $password;
	public $dataBase;
	
	public function __construct()
	{
		$this->open_connection();	
	}
	public function open_connection()
	{
		$local = "localhost";
		$user = "root";
		$password = "";
		$dataBase = "estudoCaso";
	 	$this->connection = new mysqli($local, $user, $password, $dataBase);
	 	$result=$this->getConnection();
	 	if($result->connect_errno)
	 	{	
			echo "Houve um erro na tentativa de conexão com MySQL: 	(" . $this->getConnection()->connect_errno . ") " . $this->getConnection()->connect_error;
		}
	}
    public function getConnection() {
        return $this->connection;
    }
    public function __destruct(){

    }
}
?>