<?php
use App\App;
define('ROOT', dirname(__DIR__));
define('REQUEST', str_replace(dirname(dirname($_SERVER['SCRIPT_NAME'])), '', $_SERVER['REQUEST_URI']));

require ROOT . '/src/app/App.php';

$app = new App;
	$app->init(); 
	$app->run();