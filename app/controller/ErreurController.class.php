<?php
namespace App\Controller;

class ErreurController extends Controller{
	const TEMPLATE = 'error';
	const TITLE = 'Erreur';
	
	public function run(){
		echo 'Erreur';
	}
}