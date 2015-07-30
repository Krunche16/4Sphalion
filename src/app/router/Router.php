<?php
namespace Sphalion\App\Router;

class Router{
	private $path = [];
	private $route;
	
	public function __construct(){
		$json = file_get_contents(ROOT . '/src/config/routes.json');
		$routes = json_decode($json);
		
		for($i = 0; $i < count($routes); $i++){
			for($a = 0; $a < count($routes[$i]->{"access"}); $a++){
				for ($c=0; $c < count($routes[$i]->{"access"}[$a]->{"action"}); $c++) { 
					
					if($routes[$i]->{"access"}[$a]->{"method"} === "POST"){
						$this->path["POST"][$routes[$i]->{"path"}][$routes[$i]->{"access"}[$a]->{"status"}] = $routes[$i]->{"access"}[$a]->{"action"};
					}else if($routes[$i]->{"access"}[$a]->{"method"} === "GET"){
						$this->path["GET"][$routes[$i]->{"path"}][$routes[$i]->{"access"}[$a]->{"status"}] = $routes[$i]->{"access"}[$a]->{"action"};
					}
				
				}
			}
		}
	}
	
	public  function match(){
		$request = (substr(REQUEST, 0, strpos(REQUEST, '/', 1)))
					? substr(REQUEST, 0, strpos(REQUEST, '/', 1))
					: REQUEST;
		
		return $this->route = (isset($this->path[$_SERVER['REQUEST_METHOD']][$request][$_SESSION['user']->getStatus()]))
								? new Route($this->path[$_SERVER['REQUEST_METHOD']][$request][$_SESSION['user']->getStatus()])
								: new Route();
	}
}