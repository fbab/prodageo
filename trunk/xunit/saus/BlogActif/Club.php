<?php


class Club implements Countable , IteratorAggregate 
{
    	
    private $nom;
    private $adresse;
    private $codePostal;
    private $ville;
    private $membres;
  

    public function __construct($nom, $adresse, $codePostal, $ville )
    {
        $this->_nom       = $nom;
        $this->_adresse   = $adresse;
	$this->_codePostal = $codePostal;
        $this->_ville      = $ville;
        $this->_membres    = new Membre;
    }
    
    public function isEmpty()
    {
        return count($this) == 0;
    }


    public function getNom()
    {
        return $this->_nom;
    }

    public function getAdresse()
    {
        return $this->_adresse;
    }

    public function getCodePostal()
    {
        return $this->_codePostal;
    }

    public function getVille()
    {
        return $this->_ville;
    }
    
    public function count()
    {
        return count($this->_membres);
    }
    
}
