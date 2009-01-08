<?php
class Utilisateur
{
	//le nom de l'utilisateur
	private $_nom;
	//les aliments qu'il aime (tableau de string)
	private $_aime;
	//les aliments qu'il déteste (tableau de string)
	private $_deteste;

	//constructeur, prend le nom de l'utilisateur en paramètre
	public function __construct($nom)
	{
		$this->_nom = $nom;
		$this->_aime = new array();
		$this->_deteste = new array();
	}
	
	//renvois le nom de l'utilisateur
	public function getName()
	{
		return $this->_nom;
	}
	
	//met une liste d'aliments dans le tableau "aime" (écrase les valeurs précédentes)
	public function setAime($aliments)
	{
		$this->_aime = $aliments;
	}
	
	//ajoute un aliment au tableau "aime"
	public function addAime($aliment){
		array_push($this->_aime, $aliment);
	}
	
	//renvois le tableau des aliments que l'utilisateur aime
	public function getAime(){
		return $this->_aime;
	}
	
	//met une liste d'aliments dans le tableau "déteste" (écrase les valeurs précédentes)
	public function setDeteste($aliments)
	{
		$this->_deteste = $aliments;
	}
	
	//ajoute un aliment au tableau "déteste"
	public function addDeteste($aliment){
		array_push($this->_deteste, $aliment);
	}
	
	//renvois le tableau des aliments que l'utilisateur déteste
	public function getDeteste(){
		return $this->_deteste;
	}
	
	//renvois les informations de l'utilisateur sous forme d'une chaine à afficher	
	public function __tostring(){
			$tmp = $this->_nom." aime ";
			if(sizeof($this->_aime)<=0)
				$tmp.= "tout ";
			else
				for($i=0; $i<sizeof($this->_aime); $i++)
					$tmp.= $this->_aime[$i].", ";		
			$tmp. = "et deteste ";
			if(sizeof($this->_deteste)<=0)
				$tmp.= "rien ";
			else
				for($i=0; $i<sizeof($this->_deteste); $i++)
					$tmp.= $this->_deteste[$i].", ";
			return $tmp;
	}
	
}
