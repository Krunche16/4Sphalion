<?php
namespace Sphalion\App\Controller;

class Controller{
	public function render($template, $title, $content = '', $status = '', $nav = ''){
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