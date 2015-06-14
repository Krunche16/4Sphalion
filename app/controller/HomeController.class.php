<?php
namespace App\Controller;
use \App\Database\Database;

class HomeController extends Controller{
	const TEMPLATE = 'default';
	const TITLE = 'Home';
	
	public function run(){
		if(isset($_SESSION['user'])){
			if(isset($_POST['description'])){
				$this->setDescription($_POST['description']);
			}
		}
		$this->getDescription();
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