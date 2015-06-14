<?php
namespace App\Controller;
use \App\Database\Database;

class HomeController extends Controller{
	const TEMPLATE = 'default';
	const TITLE = 'Home';
	
	public function run(){
		if(isset($_SESSION['user'])){
			
		}else{$this->getdescription();}
	}
	
	private function getDescription(){
		$q = Database::getInstance('Home')->getDescription();
		$q = '<article>' . $q . '</article>';
		$this->render(self::TEMPLATE, self::TITLE, $q);
	}
	
	private function setDescription(){
		$q = Database::getInstance('Home')->setDescription();
		
		$this->render(self::TEMPLATE, slef::TITLE);
	}
}