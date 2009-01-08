<?php
class Etudiant
{
	private $_numEtu;
	private $_nom;
	private $_prenom;
	private $_dateNais;

	/**
	 * Constructor
	 */
	function __construct($numetu, $nom, $prenom, $datenais )
	{
		$this->_numEtu = $numetu;
		$this->_nom = $nom;
		$this->_prenom = $prenom;
		$this->_dateNais = $datenais;
	}

	/**
	 * Fonction getName
	 * @return string nom de l'etudiant
	 */
	public function getName()
	{
		return $this->_nom;
	}

	/**
	 * Fonction getNumEtu
	 * @return int numero de l'etudiant
	 */
	public function getNumEtu()
	{
		return $this->_numEtu;
	}

	/**
	 * Fonction updateName
	 * @param string nom de l'etudiant
	 */
	public function updateName($nom)
	{
		$this->_nom = $nom;
	}

	/**
	 * Fonction __toString
	 * @return string nom de l'etudiant
	 */
	public function __toString()
	{
		return $this->getName();
	}
}
?>
