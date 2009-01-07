<!--Tests de la classe Enseignant du projet LogIFIPS-->

<?php
class Enseignant
{
    private $_nom;
    private $_prenom;

    public function __construct($nom, $prenom)
    {
        $this->_nom = $nom;
        $this->_prenom = $prenom;
    }

    public function setNom($nom)
    {
        $this->_nom = $nom;
        return $this;
    }

    public function getNom()
    {
        return $this->_nom;
    }

    public function setPrenom($prenom)
    {
        $this->_prenom = $prenom;
        return $this;
    }

    public function getPrenom()
    {
        return $this->_prenom;
    }
}
?>