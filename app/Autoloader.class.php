<?php
namespace App;

class Autoloader{
	public static function spl(){
		spl_autoload_register([__CLASS__, 'load']);
	}
	
	private static function load($class){
		if(strpos($class, 'App\\') === 0){
			
			$class = str_replace('App\\', '', $class);
			$class = str_replace('\\', '/', $class);
			require $class . '.class.php';
			
		}
		
	}
}