<?php
require_once 'Personne.php';
require_once 'AscenseurException.php';

class Ascenseur implements Countable 
{
    const MAX_ETAGES  = 50;
    const CHARGE_MAXI = 5;
	
    private $_nom;
    private $_etage;
    private $_personnes;

    public function __construct($nom, $etage)
    {
        $this->_personnes = new SplObjectStorage;
	    $this->_nom = $nom;
        $this->go($etage);
    }

    protected function _searchPersonne(Personne $p)
    {
        return $this->_personnes->contains($p);
    }
    
    public function charger(Personne $p)
    {
        if($p->getEtage() != $this->getEtage()) { // la personne est-elle au même étage que nous, ascenseur ?
            throw new AscenseurException('La personne '.$p->getName().' n\'est pas à l\'étage '.$this->getEtage());
        }
        if($this->_searchPersonne($p)) {
            throw new AscenseurException($p->getName() . ' existe déjà');           
        }
        if (count($this) == self::CHARGE_MAXI) { // surcharge éventuelle ?
            throw new AscenseurException('Surcharge');
        }
        $this->_personnes->attach($p);
    }

    public function decharger(Personne $p)
    {
        $this->_personnes->detach($p);
    }
    
    public function getPersonne(Personne $p)
    {
        if($this->_searchPersonne($p)) {
            return $p;
        }
        throw new AscenseurException('Cette personne n\'est pas dans l\'ascenseur');
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
        foreach ($this->_personnes as $personne) { // toutes les personnes se déplacent avec l'ascenseur
            $personne->setEtage($a_l_etage);
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
