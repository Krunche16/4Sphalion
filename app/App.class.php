<?php
namespace App;

class App{
	public function init(){
		require 'Autoloader.class.php';
			Autoloader::spl();
			
		session_start();
	}
	
	public function run(){
		$controller = Router::getController();
		$controller->run();
	}
}