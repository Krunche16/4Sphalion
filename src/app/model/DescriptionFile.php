<?php

namespace Sphalion\App\Model;

class DescriptionFile extends Origin\File{
	protected $filePath;
	
	public function __construct(){
		$this->filePath = ROOT. '/src/app/views/description.desc';
		parent::__construct();
	}
}