<?php

Class Database {
	
	private $host;
	private $user;
	private $database;
	private $password;
	protected $conn;

	public function __construct(){
		$this->host = "localhost";
		$this->user = "root";
		$this->password = "";
		$this->database = "SimpleBlog";
		
		$this->conn = new PDO("mysql:host={$this->host};dbname={$this->database};charset=utf8",$this->user,$this->password);
		$this->conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		$this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
	}

	protected function ExecuteQuery($sql,$params = []){
		try{
			$statement = $this->conn->prepare($sql);
			$statement->execute($params);
			return $statement->fetchAll();
		}catch (PDOException $e) {
			throw new Exception($e->getMessage());
		}
	}

	protected function ExcecuteNonQuery($sql,$params = []){
		try{
			$statement = $this->conn->prepare($sql);
			$statement->execute($params);
			return true;
		}catch (PDOException $e) {
			throw new Exception($e->getMessage());
		}
	}


	public function Disconnect(){
		$this->conn = NULL;
	}

}
