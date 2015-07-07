<?php
namespace Sphalion\App\Database;

class HomeDatabase extends Database{
	protected $dbName;
	protected $dbHost;
	protected $dbPassword;
	protected $dbUser;
	
	protected $db;
	
	protected static $_instance;
	
	public function __construct(){
		parent::__construct();
	}
	
	public function getDescription(){
		$file = fopen(ROOT. '/src/app/views/description.desc', 'r');
			$desc = fgets($file);
		fclose($file);
		
		return $desc;
	}
	
	public function setDescription(){
		$file = fopen(ROOT. '/src/app/views/description.desc', 'a');
			fputs($file, 'Salut tout le monde !');
		fclose($file);
	}
	
	public function connect($username, $userpass){
		Database::getInstance('User')->connect($username, $userpass);
	}
}