<?php
require_once 'Personne.php';
require_once 'EnchereException.php';

class Enchere 
{
	
	private $_currentPersonne;
	private $_currentPrice;
	private $_count;
	private $_enchereSum;

	public function __construct($price,$personne){
		$this->_currentPrice = $price;
		$this->_currentPersonne = $personne;
		$this->_count = 0;
		$this->_enchereSum = 0;
	}

	public function getCurrentPrice(){
		return $this->_currentPrice;
	}
	
	public function getCurrentPersonne(){
		return $this->_currentPersonne;
	}

	public function encherir($price,$personne){
		//echo $price." ".$this->_currentPrice;
		if ($price > $this->_currentPrice){
			$this->enchereSum += $price-$this->_currentPrice; 
			$this->_currentPrice = $price;
			$this->_currentPersonne = $personne;
			$this->_count++;
		}else{
			throw new EnchereException("Le montant de la nouvelle enchere (".$price.") est inferieur ou egal a l'ancienne (".$this->_currentPrice.").");
		}
	}

	public function getCount(){
		return $this->_count;
	}

	public function getAverage(){
		return ($this->enchereSum/$this->_count);
	}
}
