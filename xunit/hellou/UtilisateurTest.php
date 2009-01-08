<?php


require_once './Utilisateur.php';

class UtilisateurTest extends PHPUnit_Frameword_TestCase
{
	private $_utilisateur;

	public function setUp()
	{
		$this->_utilisateur = new Utilisateur('test');
	}
	
	public function testGetName()
	{
		$this->assertEquals('test',$_utilisateur->getName());
	}
	
	public function testAime()
	{
                $aimes = array('a','b','c');
                $_utilisateur.getAime();
	}
	
	public function testDeteste()
	{
	}
/*	public function addAime($aliment){
		array_push($this->_aime, $aliment);
	}
	
	public function getAime(){
		return $this->_aime;
	}
	
	public function setDeteste($aliments)
	{
		$this->_deteste = $aliments;
	}
	
	public function addDeteste($aliment){
		array_push($this->_deteste, $aliment);
	}
	
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
*/	
}
