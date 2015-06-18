<?php
namespace App;

class App{
	public function init(){
		session_start();
		
		require 'Autoloader.class.php';
			Autoloader::spl();
	}
	
	public function run(){
		$controller = Router::getController();
		$controller->run();
	}
}