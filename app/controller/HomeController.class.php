<?php
namespace App\Controller;
use \App\Database\Database;

class HomeController{
	public function run(){
		if(isset($_SESSION['user'])){
			
		}else{$this->description();}
	}
	
	private function description(){
		$q = Database::getInstance('Home')->getDb();
			var_dump($q);
	}
}