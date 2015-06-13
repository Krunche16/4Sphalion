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
	
	public function getDescription(){
		$xml = new \SimpleXMLElement(ROOT . '/xml/description.xml', 0, true);
		return $xml->desc;
	}
	
	public function setDescription(){
		$xml = new \SimpleXMLElement(ROOT . '/xml/description.xml', 0, true);
		$xml->desc = 'Salut tout le monde !';
		$xml->asXML(ROOT . '/xml/description.xml');
	}
}