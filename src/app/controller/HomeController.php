<?php
namespace Sphalion\App\Controller;
use \Sphalion\App\Model\UserDatabase;
use \Sphalion\App\Model\DescriptionFile;

class HomeController extends Controller{
	
	private $title;
	private $template;
	
	public function __construct(){
		parent::__construct();
		
		$this->title = 'Home';
		$this->template = 'default';
	}
	
	public function index(){
		if($this->args['GET'] !== null){
			return false;
		}

		if($_SESSION['user']->getStatus() === 'user' || $_SESSION['user']->getStatus() === 'admin'){
			$q = $this->getDescription();
			$this->render($this->template, ['title' => $this->title, 'content' => $q]);
		}else{
			$q = $this->getDescription();
			$this->render($this->template, ['title' => $this->title, 'content' => $q]);
		}
	}
	
	public function connect(){
		$username = $_POST['username'];
		$userpass = $_POST['userpass'];
		
		$userDatabase = new UserDatabase;
		$userDatabase->connect($username, $userpass);
	}
	public function redirect(){
		header('Location: Home');
	}
	
	private function getDescription(){
		$description = new DescriptionFile;
		
		$q = $description->getAllFile();
		$q = '<article>'. $q .'</article>';
		return $q;
	}
}