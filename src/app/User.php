<?php
namespace Sphalion\App;

class User{
	private $id;
	private $username;
	private $userpass;
	private $status;
	
	public function __construct($data){
		$this->id = (int) $data->id;
		$this->username = $data->username;
		$this->userpass = $data->userpass;
		$this->status = (int) $data->status;
	}
		
	public function getId(){
		return $this->id;
	}
	
	public function getUsername(){
		return $this->username;
	}
	
	public function getUserpass(){
		return $this->userpass;
	}
	
	public function getStatus(){
		return $this->status;
	}
}