<?php
class Personne 
{
private $_nom;
    private $_etage;

    /**
     * Constructeur
     * @param string nom de la personne
     */
    public function __construct($nom)
    {
        $this->_nom = $nom;
        $this->_etage = 0;
    }

    /**
     * Fonction setEtage
     * @param int etage de la personne
     */
    public function setEtage($etage)
    {
        $this->_etage = $etage;
    }

    /**
     * Fonction getEtage
     * @return int etage de la personne
     */
    public function getEtage()
    {
        return $this->_etage;
    }


    /**
     * Fonction getName
     * @return string nom de la personne
     */ public function getName()
    {
        return $this->_nom;
    }
 }

?>
