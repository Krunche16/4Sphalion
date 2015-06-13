<?php
namespace App\Controller;
use \App\Database\Database;

class HomeController{
	public function run(){
		if(isset($_SESSION['user'])){
			
		}else{$this->getdescription();}
	}
	
	private function getDescription(){
		$q = Database::getInstance('Home')->getDescription();
		echo $q;
	}
	
	private function setDescription(){
		$q = Database::getInstance('Home')->setDescription();
		var_dump($q);
	}
}