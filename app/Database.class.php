<?php
namespace App;

class Database{
	private $dbName;
	private $dbHost;
	private $dbPassword;
	private $dbUser;
	
	private $db;
	
	private static $_instance;
	
	private function __construct(){
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
	
	public static function getInstance(){
		if(self::$_instance === null){
			self::$_instance = new Database();
		}
		return self::$_instance;
	}
}