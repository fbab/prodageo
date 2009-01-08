<?php
require_once 'Personne.php';
//require_once 'AscenseurException.php'

class Enchere implements Countable 
{
	
	private $_currentPersonne;
	private $_currentPrice;
	private $_count;
	private $_enchereSum;

	public function __construct($price,$personne)
	{
		$this->_currentPrice = $price;
		$this->_currentPersonne = $personne;
		$this->_count = 1;
		$this->_enchereSum = 0;
	}

	public function getCurrentPrice(){
		return $this->_currentPrice;
	}
	
	public function getCurrentPersonne(){
		return $this->_currentPersonne;
	}

	public function encherir($price,$personne){
		$this->enchereSum += $price - $this->price; 
		$this->_currentPrice = $price;
		$this->_currentPersonne = $personne;
		$this->_count++;
	}

	public function getCount(){
		return $this->_count;
	}

	public function getAverage(){
		return $this->enchereSum / $this->_count;
	}

    public function charger(Personne $p)
    {
        $this->_personnes->attach($p);
    }

    public function decharger(Personne $p)
    {
        $this->_personnes->detach($p);
    }
    
    public function isEmpty()
    {
        return count($this) == 0;
    }

    public function go($a_l_etage)
    {
        $a_l_etage = abs((int)$a_l_etage);
        if ($a_l_etage > self::MAX_ETAGES || $a_l_etage < 0) {
            throw new AscenseurException('Etage invalide');
        }	    
        $this->_etage = $a_l_etage;
    }

    public function getName()
    {
        return $this->_nom;
    }

    public function getEtage()
    {
        return $this->_etage;
    }
	
    public function count()
    {
        return count($this->_personnes);
    }
}
