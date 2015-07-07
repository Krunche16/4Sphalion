<?php
namespace Sphalion\App\Controller;

class AccountController extends Controller{
	
	const TEMPLATE = 'default';
	const TITLE = 'Mon Compte';
	const STATUS_CO = 'hamburger.html';
	const NAV = 'nav.html';
	
	public function run(){
		if(isset($_SESSION['user'])){

			$this->render(self::TEMPLATE, self::TITLE, $_SESSION['user']->getUsername(), self::STATUS_CO, self::NAV);
		
		}else{ header('Location: Home');}
	}
	
}