<?php
namespace App\Controller;

class Controller{
	public function render($template, $title, $render = ''){
		$content = $render;
		require ROOT . '/app/views/templates/' . $template . '.php';
	}
}