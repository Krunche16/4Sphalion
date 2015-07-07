<?php
namespace Sphalion\App\Controller;
use \Sphalion\App\Database\Database;

class HomeController extends Controller{
	const TEMPLATE = 'default';
	const TITLE = 'Home';
	const NAV = 'nav.html';
	const STATUS_CO = 'hamburger.html';
	const STATUS_DISCO = 'connexion.html';
	
	public function run(){
		if(isset($_POST['username']) && isset($_POST['userpass'])){
				$this->connect($_POST['username'], $_POST['userpass']);
		}
		
		if(isset($_SESSION['user'])){
			if(isset($_POST['description'])){
				$this->setDescription($_POST['description']);
			}
			$q = $this->getDescription();
			$this->render(self::TEMPLATE, self::TITLE, $q, self::STATUS_CO, self::NAV);
		}else{
			$q = $this->getDescription();
			$this->render(self::TEMPLATE, self::TITLE, $q, self::STATUS_DISCO);
		}
	}
	
	private function getDescription(){
		$q = Database::getInstance('Home')->getDescription();
		$q = '<article>' . $q . '</article>';
		
		return $q;
	}
	
	private function setDescription(){
		$q = Database::getInstance('Home')->setDescription();
	}
	
	private function connect($username, $userpass){
		Database::getInstance('Home')->connect($username, $userpass);
	}
}