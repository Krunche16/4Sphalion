<?php

namespace Sphalion\App\Model\Origin;

abstract class File{
	protected $filePath;

	protected $file;
	
	protected function __construct(){
		$this->file = fopen($this->filePath, 'r');
	}
	
	public function __destruct(){
		fclose($this->file);
	}
	
	public function getAllFile(){
		return fgets($this->file);
	}
	
	public function setAllFile($content){
		fputs($this->file, 'Salut tout le monde !');
	}
}