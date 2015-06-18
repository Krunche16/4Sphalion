<?php
namespace App\Database;
use \App\Database\HomeDatabase;

class Database{
	protected $dbName;
	protected $dbHost;
	protected $dbPassword;
	protected $dbUser;
	
	protected $db;
	
	protected function __construct(){
		$dbData = require ROOT . '/config/config.conf';
			$this->dbHost = $dbData['dbHost'];
			$this->dbName = $dbData['dbName'];
			$this->dbPassword = $dbData['dbPassword'];
			$this->dbUser = $dbData['dbUser'];
		
		try{
			$this->db = new \PDO('mysql:host='.$this->dbHost.'; dbname='.$this->dbName.'; charset=utf8', $this->dbUser, $this->dbPassword);
		}catch(Exception $e){
			die('Erreur: '.$e->getMessage());
		}
	}
	
	final public static function getInstance($database){
		$class = 'App\Database\\' . ucfirst($database) . 'Database';
		return new $class();
	}
}