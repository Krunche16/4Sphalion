<?php
namespace Sphalion\App\Controller;

class ErreurController extends Controller{
	private $template = 'default';
	private $title = 'Erreur';
	
	public function index(){
		$this->render($this->template, ['title' => $this->title, 'content' => 'Je suis la page d\'erreur !']);
	}
}