<?php

include(__DIR__.'/../class/database.php');

Class Blog extends Database{

	public function __construct(){
		parent::__construct();
	
	}

	public function getAllData(){
		$sql = "SELECT * FROM blog";
		$blogs = $this->ExecuteQuery($sql);
		$this->Disconnect();
		return $blogs;
	}

	public function find($id){
		$data = array($id);
		$sql = "SELECT * FROM blog WHERE idno = ?";
		$blog = $this->ExecuteQuery($sql,$data);
		$this->Disconnect();
		return $blog;
	}

	public function Save($params = []){
		$data = array($params['title'],$params['body'],date('Y-m-d',time()));
		$sql = "INSERT INTO blog (title,body,datecreated) VALUES (?,?,?)";
		$blog = $this->ExcecuteNonQuery($sql,$data);

	}

	public function remove($id){
		$data = array($id);
		$sql = "DELETE FROM blog WHERE idno = ?";
		$blog = $this->ExcecuteNonQuery($sql,$data);
	}

	public function Search(){

	}


	public function Update($params = []){

	}

}

