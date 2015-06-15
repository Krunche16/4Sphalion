<?php
namespace App;

class App{
	public function init(){
		session_start();
		$_SESSION['user'] = 'test';

		require 'Autoloader.class.php';
			Autoloader::spl();
	}
	
	public function run(){
		$controller = Router::getController();
		$controller->run();
	}
}