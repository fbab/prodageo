<?php
require_once 'Personne.php';
require_once 'AscenseurFinal.php';

class AscenseurTest extends PHPUnit_Framework_TestCase
{
    private $ascenseur;
    private $personne;

    protected function setUp ()
    {
        $this->ascenseur = new Ascenseur('ascenseur 1', 3);
        $this->personne  = new Personne('julien');
        $this->personne->setEtage(3);
    }
    
    public function testAscenseurInitialise ()
    {
        $this->assertEquals($this->ascenseur->getName(), 'ascenseur 1');
        $this->assertEquals(3, $this->ascenseur->getEtage());
        $this->assertTrue($this->ascenseur->isEmpty());
    }
    
    public function testAscenseurBouge ()
    {
        $this->ascenseur->go(8);
        $this->assertEquals(8, $this->ascenseur->getEtage());
        $this->ascenseur->go(- 9.9);
        $this->assertEquals(9, $this->ascenseur->getEtage());
        $this->ascenseur->go(2);
        $this->assertEquals(2, $this->ascenseur->getEtage());
    }

	
    public function testAscenseurMonteUnPeuTropHautEchoue ()
    {
        $this->setExpectedException('AscenseurException');
        $this->ascenseur->go(200);
    }
    
    
    public function testChargeAscenseurAvecPersonnes ()
    {
        $this->assertTrue($this->ascenseur->isEmpty());
        $this->ascenseur->go(0);
        $this->ascenseur->charger(new Personne('Elodie'));
        $this->ascenseur->charger(new Personne('Guillaume'));
        $this->assertEquals(count($this->ascenseur), 2);
        $this->assertFalse($this->ascenseur->isEmpty());
    }
    
    public function testDechargeAscenseur ()
    {
        $this->ascenseur->charger($this->personne);
        $this->assertFalse($this->ascenseur->isEmpty());
        $this->ascenseur->decharger($this->personne);
        $this->assertEquals(count($this->ascenseur), 0);
        $this->assertTrue($this->ascenseur->isEmpty());
    }
    
    
    public function testGetPersonne ()
    {
        $this->ascenseur->charger($this->personne);
        $this->assertSame($this->personne, $this->ascenseur->getPersonne($this->personne));
        $this->setExpectedException('AscenseurException');
        $this->ascenseur->getPersonne(new Personne('personne'));
    }
    
    
    public function testChargeAscenseurAvecDeuxFoisLaMemePersonneEchoue ()
    {
        $this->ascenseur->charger($this->personne);
        $this->setExpectedException('AscenseurException');
        $this->ascenseur->charger($this->personne);
    }
    
    public function testAscenseurMonteAvecDesPersonnes ()
    {
        $this->ascenseur->charger($this->personne);
        $this->ascenseur->go(8);
        $this->assertEquals(8, $this->ascenseur->getPersonne($this->personne)->getEtage());
    }
    
    
    public function testChargeAscenseurAvecUnePersonnePasAuMemeEtageEchoue ()
    {
        $this->setExpectedException('AscenseurException');
        $this->ascenseur->charger($this->personne->setEtage(10));
    }
   
    public function testSurchargeAscenseur ()
    {
        $this->ascenseur->go(0);
        $this->ascenseur->charger(new Personne('Elodie'));
        $this->ascenseur->charger(new Personne('Guillaume'));
        $this->ascenseur->charger($this->personne->setEtage(0));
        $this->ascenseur->charger(new Personne('Sarah'));
        $this->ascenseur->charger(new Personne('Sophie'));
        $this->assertEquals(count($this->ascenseur), 5);
        $this->setExpectedException('AscenseurException');
        $this->ascenseur->charger(new Personne('Benoit'));
    }
    
    public function testIterator ()
    {
        $this->ascenseur->charger($this->personne);
        $this->assertThat($this->ascenseur,new PHPUnit_Framework_Constraint_TraversableContains($this->personne));
    }
}
