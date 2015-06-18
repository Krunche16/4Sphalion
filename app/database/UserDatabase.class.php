<?php
namespace App\Database;

class UserDatabase extends Database{
	public function __construct(){
		parent::__construct();
	}
	
	public function connect($username, $userpass){
		$q = $this->db->prepare('SELECT * FROM users WHERE username = ? AND userpass = ?');
			$q->execute([$username, $userpass]);
		$user = $q->fetchAll(\PDO::FETCH_OBJ);
		
		if(!empty($user)){
			$_SESSION['user'] = $user; 
		}
	}
}