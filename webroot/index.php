<?php
use App\App;
define('ROOT', dirname(__DIR__));
define('REQUEST', trim($_SERVER['REQUEST_URI'], dirname(dirname($_SERVER['SCRIPT_NAME']))));

require ROOT . '/app/App.class.php';

$app = new App;
	$app->init(); 
	$app->run();