<?php

class Homo extends Faune {
	protected $debout = true;
	protected $feu = false;

	public function __construct(){
		$this->multicellulaire = true;
	}

	public function getFeu(){
		return $this->feu;
	}

	public function getDebout(){
		return $this->debout;
	}

}