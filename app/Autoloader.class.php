<?php
namespace App;

class Autoloader{
	public static function spl(){
		spl_autoload_register([__CLASS__, 'load']);
	}
	
	private static function load($class){
		var_dump($class);
		require $class . '.class.php';
	}
}