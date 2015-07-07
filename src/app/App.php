<?php
namespace Sphalion\App;

class App{
	public function init(){
		session_start();
	}
	
	public function run(){
		$controller = Router::getController();
		$controller->run();
	}
}