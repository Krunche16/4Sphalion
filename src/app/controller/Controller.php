<?php
namespace Sphalion\App\Controller;

class Controller{
	protected $args = [];
	protected $render = [];
	protected $underTemplate = [];
	
	public function __construct(){
		if(!empty($_POST)){
			foreach ($_POST as $key => $value) {
				$this->args['POST'][$key] = $value;
			}
		}else{
			$this->args['POST'] = null;
		}
		
		if(strpos(REQUEST, '/', 1) && substr(REQUEST, strpos(REQUEST, '/', 1)+1)){
			$this->args['GET'] = substr(REQUEST, strpos(REQUEST, '/', 1), strlen(REQUEST));
			$this->args['GET'] = trim($this->args['GET'], '/');
			$this->args['GET'] = explode('/', $this->args['GET']);
		}else{
			$this->args['GET'] = null;
		}
	}
	
	protected function render($template, $render = [], $underTemplate = []){
		$this->render = $render;
		$this->underTemplate = $underTemplate;
		
		require ROOT . '/src/app/views/templates/' . $template . '.php';
	}
	
	protected function get($item){
		return (isset($this->render[$item]))? $this->render[$item]
											 : false;
	}
	
	protected function template($item){
		if(isset($this->underTemplate[$item])){
			require ROOT . '/src/app/views/templates/underTemplates/' . $this->underTemplate[$item] . '.html';
		}
	}
}