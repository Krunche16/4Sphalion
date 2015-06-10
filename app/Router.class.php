<?php
namespace App;
use App\Controller\HomeController;

class Router{
	public static function getController(){
		
		switch (REQUEST) {
			case 'Home':
				return new HomeController();
				break;
			
			default:
				echo 'Vous êtes on ne sait où';
				break;
		}
	}
}