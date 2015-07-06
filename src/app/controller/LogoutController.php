<?php
namespace App\Controller;

class LogoutController extends Controller{
	public function run(){
		session_destroy();
		header('Location: Home');
		exit();
	}
}