<?php

class Menu
{
	
	private $_currentPrix;
	private $_currentPromo;
	private $_currentPlat;
	private $_currentID;



	public function __construct($price,$promo,$plat,$id)
	{
		$this->_currentPrix = $price;
		$this->_currentPromo = $promo;
		$this->_currentPlat = $plat;
		$this->_currentID = $id;
	}

	public function getCurrentPrice(){
		return $this->_currentPrix;
	}
}
?>
