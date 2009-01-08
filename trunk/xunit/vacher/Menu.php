<?php

class Menu
{
	
	private $_currentPrix;
	private $_currentPromo;
	private $_currentPlat;
	private $_currentID;



	/**
	*rconstructeur initialisation du menu
	* @return Menu
	*/
	public function __construct($price,$promo,$plat,$id)
	{
		$this->_currentPrix = $price;
		$this->_currentPromo = $promo;
		$this->_currentPlat = $plat;
		$this->_currentID = $id;
	}

	/**
	*renvoi le prix du menu
	* @return int
	*/
	public function getCurrentPrice(){
		return $this->_currentPrix;
	}

	/**
	*renvoi la promo sur le menu
	* @return int
	*/
	public function getCurrentPromo(){
		return $this->_currentPromo;
	}

	/**
	*renvoi le plat du menu
	* @return string
	*/
	public function getCurrentPlat(){
		return $this->_currentPlat;
	}

	/**
	*renvoi l'ID du menu
	* @return int
	*/
	public function getCurrentID(){
		return $this->_currentID;
	}


}
?>
