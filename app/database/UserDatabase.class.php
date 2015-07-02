<?php
namespace App\Database;
use App\User;

class UserDatabase extends Database{
	public function __construct(){
		parent::__construct();
	}
	
	public function connect($username, $userpass){
		$q = $this->db->prepare('SELECT * FROM users WHERE username = ? AND userpass = ?');
			$q->execute([$username, $userpass]);
		$user = $q->fetchAll(\PDO::FETCH_OBJ);
		
		if(!empty($user)){
			$_SESSION['user'] = new User($user[0]);
		}else{
			header('HTTP/1.0 403');
		}
	}
}