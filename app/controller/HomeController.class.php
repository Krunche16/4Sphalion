<?php
namespace App\Controller;

class HomeController{
	public function run(){
		if(isset($_SESSION['user'])){
			
		}else{$this->description();}
	}
	
	private function description(){
		
	}
}