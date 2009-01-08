<!--Tests de la classe Enseignant du projet LogIFIPS-->

<?php
/**
*	Classe Enseignant
*	@author Matthieu MIKA
*/
class Enseignant
{
    private $_nom;
    private $_prenom;

    public function __construct($nom, $prenom)
    {
        $this->_nom = $nom;
        $this->_prenom = $prenom;
    }

	/**
	*	Fonction de mise a jour du nom
	*/
    public function setNom($nom)
    {
        $this->_nom = $nom;
        return $this;
    }

	/**
	*	Fonction ecuperation du nom
	*	@return String
	*/
    public function getNom()
    {
        return $this->_nom;
    }

	/**
	*	Fonction de misà a jour du prenom
	*/
    public function setPrenom($prenom)
    {
        $this->_prenom = $prenom;
        return $this;
    }

	/**
	*	Fonction de recuperation du prenom
	*	@return String
	*/
    public function getPrenom()
    {
        return $this->_prenom;
    }
}
?>
