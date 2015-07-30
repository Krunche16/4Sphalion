<?php
namespace Sphalion\App;

class App{
	public function init(){
		session_start();
		$_SESSION['user'] = (isset($_SESSION['user']))
							? $_SESSION['user']
							: new User;
	}
	
	public function run(){
		$router = new Router\Router;
		$route = $router->match();
		$route->run();
	}
}