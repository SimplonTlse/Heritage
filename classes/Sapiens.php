<?php

class Sapiens extends Homo {

	public function __construct(){
		parent::__construct();
		
		$this->feu = true;
	}

	public function getAdn(){
		return 'nawak';
	}

}