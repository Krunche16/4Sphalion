<?php
namespace Sphalion\App\Router;

class Route{
	private $action = [];
	
	public function __construct(array $action = array()){
		$this->action = (empty($action)) ? ["ErreurController::index"] : $action;
	}
	
	public function run(){
		for ($i = 0; $i < count($this->action); $i++) {
			$controller = '\Sphalion\App\Controller\\' . $this->getController($i);
			$controller = new $controller;
			
			$do = $this->getAction($i);

			if($controller->$do() === false){
				$controller = new \Sphalion\App\Controller\ErreurController;
				$controller->index();
			}
		}
	}
	
	private function getController($i){
		$explode = explode('::', $this->action[$i]);
		return $explode[0];
	}
	
	private function getAction($i){
		$explode = explode('::', $this->action[$i]);
		return $explode[1];
	}
}