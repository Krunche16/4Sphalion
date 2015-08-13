<?php
namespace Sphalion\App\Controller;

class DiscutionController extends Controller{
	private $template = 'default';
	private $title = 'Discution';
	
	public function index(){
		$this->render($this->template, ['title' => $this->title]);
	}
}