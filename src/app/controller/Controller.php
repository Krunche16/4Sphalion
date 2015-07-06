<?php
namespace App\Controller;

class Controller{
	public function render($template, $title, $content = '', $status = '', $nav = ''){
		if($status !== ''){
			ob_start();
				include ROOT . '/app/views/' . $status;
			$status = ob_get_clean();
		}
		
		if($nav !== ''){
			ob_start();
			include ROOT . '/app/views/' . $nav;
			$nav = ob_get_clean();
		}
		
		require ROOT . '/app/views/templates/' . $template . '.php';
	}
}