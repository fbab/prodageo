<?php
require_once './Utilisateur.php';

class UtilisateurTest extends PHPUnit_Framework_TestCase
{
    private $utilisateur;

    protected function setUp ()
    {
        $this->utilisateur = new Utilisateur('plop');
    }
    
	public function testUtilisateurInitialise ()
    {
        $this->assertEquals($this->utilisateur->getName(), 'plop');
        $this->assertEquals($this->utilisateur->getAime(), array());
        $this->assertEquals($this->utilisateur->getDeteste(), array());
    }
    
	public function testUtilisateurInitialiseAime ()
    {
        $this->utilisateur->setAime(array("banane", "pomme", "poulet"));
        $this->assertEquals($this->utilisateur->getAime(), array("banane", "pomme", "poulet"));
    }
    
    public function testUtilisateurInitialiseDeteste ()
    {
        $this->utilisateur->setDeteste(array("endive", "tripes", "kiwi"));
        $this->assertEquals($this->utilisateur->getDeteste(), array("endive", "tripes", "kiwi"));
    }

	protected function values(){
	$this->utilisateur->setAime(array("banane", "pomme", "poulet"));
	$this->utilisateur->setDeteste(array("endive", "tripes", "kiwi"));
	}   
 
    public function testUtilisateurAjoutAime(){

	$this->values();
	$this->utilisateur->addAime("bacon");
        $this->assertEquals($this->utilisateur->getAime(), array("banane", "pomme", "poulet", "bacon"));
	}
	



	public function testUtilisateurAjoutDeteste(){

	$this->values();	
	$this->utilisateur->addDeteste("meduse");
        $this->assertEquals($this->utilisateur->getDeteste(), array("endive", "tripes", "kiwi", "meduse"));
	}
	
	public function testUtilisateurAffiche(){
		$this->values();	
		$this->assertEquals((string) $this->utilisateur, "plop aime banane, pomme, poulet, et deteste endive, tripes, kiwi, ");
	}
}
