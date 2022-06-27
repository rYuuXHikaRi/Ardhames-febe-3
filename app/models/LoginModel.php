<?php 


class LoginModel{
	private $table ='user';
	private $db;

	public function __construct(){
		$this->db = new Database;

	}


	public function tambahUser($data){
		$query='INSERT INTO ' .$this->table .' (username,password) VALUES (:username,:password)';
		$this->db->query($query);
		$this->db->bind('username',$data['username']);
		$this->db->bind('password',$data['password']);
		$this->db->execute();

		return $this->db->rowCount();

	}

	public function cekData($data){
		$query = 'SELECT * FROM '. $this->table .' WHERE username=:username ';
		$this->db->query($query);
		$this->db->bind('username',$data['username']);
		$this->db->execute();

		return $this->db->resultSet();

	}



}