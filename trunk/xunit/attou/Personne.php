<?php
class Personne
{
    private $_nom;
    private $_etage;

    public function __construct($nom)
    {
        $this->_nom = $nom;
        $this->_etage = 0;
    }

    public function setEtage($etage)
    {
        $this->_etage = abs((int)$etage);
        return $this;
    }

    public function getEtage()
    {
        return $this->_etage;
    }

    public function getName()
    {
        return $this->_nom;
    }
        
    public function __toString()
    {
        return $this->getName();
    }
}
?>
