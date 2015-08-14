<?php
namespace Sphalion\App\Controller;

class AccountController extends Controller{
	
	private $title = 'Mon Compte';
	private $template = 'default';
	
	public function index(){
		$this->render($this->template, ['title' => $this->title, 'underTemplate' => 'accountShow']);
	}
	
}