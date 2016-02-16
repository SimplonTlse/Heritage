<?php
class Faune {
	protected $adn = true;
	protected $multicellulaire = false;

	public function getAdn() {
		return $this->adn;
	}

	public function getMulti() {
		return $this->multicellulaire;
	}
}