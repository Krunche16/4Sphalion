<?php
namespace Sphalion\App;
use Sphalion\App\Controller\HomeController;
use Sphalion\App\Controller\AccountController;
use Sphalion\App\Controller\StrategiesController;
use Sphalion\App\Controller\DiscutionController;
use Sphalion\App\Controller\ErreurController;
use Sphalion\App\Controller\LogoutController;

class Router{
	public static function getController(){
		switch (REQUEST) {
			case '/' :
				return new HomeController();
				break;
				
			case '/Home' :
				return new HomeController();
				break;
			
			case '/MonCompte' : 
				return new AccountController();
				break;
				
			case '/Strategies' : 
				return new StrategiesController();
				break;
				
			case '/Discution' : 
				return new DiscutionController();
				break;
				
			case '/Logout' :
				return new LogoutController();
				break;
			
			default:
				return new ErreurController();
				break;
		}
	}
}