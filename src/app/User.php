<?php
namespace Sphalion\App;

class User{
	private $id;
	private $username;
	private $userpass;
	private $status;
	
	public function __construct($data = ['id' => 0, 'username' => '', 'userpass' => '', 'status' => 0]){
		$data = (object) $data;
		
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
		if($this->status === 0){
			return 'userDisconnected';
		}
		
		if($this->status === 1){
			return 'user';
		}
		
		if($this->status === 2){
			return 'admin';
		}
	}
}