<?php
namespace Sphalion\App\Controller;

class LogoutController extends Controller{
	
	public function index(){
		session_destroy();
		header('Location: Home');
		exit();
	}
}