<?php
namespace App;

class User extends Database\Database{
	private $id;
	private $username;
	private $userpass;
	private $status;
	
	public function __construct($data){
		$this->id = $data->id;
		$this->username = $data->username;
		$this->userpass = $data->userpass;
		$this->status = $data->status;
	}
}