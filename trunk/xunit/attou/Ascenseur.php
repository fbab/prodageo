<?php
require_once 'AscenseurException.php';

class Ascenseur
{
    const MAX_ETAGES  = 50;
	
    private $_nom;
    private $_etage;

    public function __construct($nom, $etage)
    {
        $this->_nom = $nom;
        $this->go($etage);
    }

    public function isEmpty()
    {
        return true;
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
}
?>
