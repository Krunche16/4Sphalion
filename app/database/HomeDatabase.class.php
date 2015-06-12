<?php
namespace App\Database;

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
	
	public function getDb(){
		return $this->db;
	}
}