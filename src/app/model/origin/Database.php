<?php
namespace Sphalion\App\Model\Origin;

abstract class Database{
	protected $table;
	
	protected $dbName;
	protected $dbHost;
	protected $dbPassword;
	protected $dbUser;
	
	protected $db;
	
	protected function __construct(){
		$dbData = require ROOT . '/src/config/config.conf';
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
	
	public function getAllTable(){
		$q = $this->db->query('SELECT * FROM '. $this->table);
		return $q->fetchAll(\PDO::FETCH_OBJ);
	}
}