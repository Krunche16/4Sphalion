<?php
namespace App\Controller;

class AccountController extends Controller{
	
	const TEMPLATE = 'default';
	const TITLE = 'Mon Compte';
	
	public function run(){
		if(isset($_SESSION['user'])){
			echo 'salut';
		}else{ header('Location: Home');}
	}
	
}