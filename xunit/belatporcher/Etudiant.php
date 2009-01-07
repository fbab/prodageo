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

	public function getName()
	{
		return $this->_nom;
	}

	public function getNumEtu()
	{
		return $this->_numEtu;
	}

	public function updateName($nom)
	{
		$this->_nom = $nom;
	}

}
?>