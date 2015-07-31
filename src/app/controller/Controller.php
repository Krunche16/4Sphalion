<?php
namespace Sphalion\App\Controller;

class Controller{
	protected $args = [];
	
	public function __construct(){
		if(!empty($_POST)){
			foreach ($_POST as $key => $value) {
				$this->args['POST'][$key] = $value;
			}
		}else{
			$this->args['POST'] = null;
		}
		
		if(strpos(REQUEST, '/', 1) && substr(REQUEST, strpos(REQUEST, '/', 1)+1)){
			$this->args = substr(REQUEST, strpos(REQUEST, '/', 1), strlen(REQUEST));
			$this->args = trim($this->args, '/');
			$this->args = explode('/', $this->args);
		}else{
			$this->args['GET'] = null;
		}
	}
	
	protected function render($template, $title, $content = '', $status = '', $nav = ''){
		if($status !== ''){
			ob_start();
				include ROOT . '/src/app/views/templates/items/' . $status;
			$status = ob_get_clean();
		}
		
		if($nav !== ''){
			ob_start();
			include ROOT . '/src/app/views/templates/items/' . $nav;
			$nav = ob_get_clean();
		}
		
		require ROOT . '/src/app/views/templates/' . $template . '.php';
	}
}