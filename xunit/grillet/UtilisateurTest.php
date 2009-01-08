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
        $this->assertEquals($this->utilisateur->getAime(), new Array());
        $this->assertEquals($this->utilisateur->getDeteste(), new Array());
    }
    
	public function testUtilisateurInitialiseAime ()
    {
        $this->assertType('Utilisateur',$this->utilisateur->setAime(array("banane", "pomme", "poulet")));
        $this->assertEquals($this->utilisateur->getAime(), array("banane", "pomme", "poulet"));
    }
    
    public function testUtilisateurInitialiseDeteste ()
    {
        $this->assertType('Utilisateur',$this->utilisateur->setDeteste(array("endive", "tripes", "kiwi")));
        $this->assertEquals($this->utilisateur->getDeteste(), array("endive", "tripes", "kiwi"));
    }
    
    public function testUtilisateurAjoutAime(){
    	$this->assertType('Utilisateur',$this->utilisateur->addAime("bacon"));
        $this->assertEquals($this->utilisateur->getAime(), array("banane", "pomme", "poulet", "bacon"));
	}
	
	public function testUtilisateurAjoutDeteste(){
    	$this->assertType('Utilisateur',$this->utilisateur->addDeteste("meduse"));
        $this->assertEquals($this->utilisateur->getDeteste(), array("endive", "tripes", "kiwi", "meduse"));
	}
	
	public function testUtilisateurAffiche(){
		$this->assertEquals((string) $this->utilisateur, "plop aime banane, pomme, poulet, bacon, et deteste endive, tripes, kiwi, meduse, ");
	}
}
