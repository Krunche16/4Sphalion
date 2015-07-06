<?php
namespace App;
use App\Controller\HomeController;
use App\Controller\AccountController;
use App\Controller\StrategiesController;
use App\Controller\DiscutionController;
use App\Controller\ErreurController;
use App\Controller\LogoutController;

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