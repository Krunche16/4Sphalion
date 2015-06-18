<?php
namespace App\Controller;

class ErreurController extends Controller{
	const TEMPLATE = 'error';
	const TITLE = 'Erreur';
	
	public function run(){
		echo 'Bonjour tout le monde moi c\'est "Page d\'erreur" !';
	}
}