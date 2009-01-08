<?php
require_once '../library/Personne.php';

class PersonneTest extends PHPUnit_Framework_TestCase
{
    private $personne;

    protected function setUp ()
    {
        $this->personne = new Personne('julien');
    }
    
	public function testPersonneInitialise ()
    {
        $this->assertEquals($this->personne->getName(), 'julien');
        $this->assertEquals($this->personne->getName(), (string) $this->personne);
        $this->assertEquals($this->personne->getEtage(), 0);
    }
    
	public function testPersonneChangeEtage ()
    {
        $this->assertType('Personne',$this->personne->setEtage(6));
        $this->assertEquals($this->personne->getEtage(), 6);
    }
    
    public function testPersonneChangeEtageBizarement ()
    {
        $this->personne->setEtage(-6.9);
        $this->assertEquals($this->personne->getEtage(), 6);
    }
}
?>