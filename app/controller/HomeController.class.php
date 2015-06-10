<?php
namespace App\Controller;
use \App\Database;

class HomeController{
	public function run(){
		if(isset($_SESSION['user'])){
			
		}else{$this->description();}
	}
	
	private function description(){
		$db = Database::getInstance();
	}
}