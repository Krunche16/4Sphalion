<?php
namespace Sphalion\App\Controller;

class StrategiesController extends Controller{
	private $template = 'default';
	private $title = 'Stratégies';
	
	public function index(){
		$this->render($this->template, ['title' => $this->title]);
	}
}