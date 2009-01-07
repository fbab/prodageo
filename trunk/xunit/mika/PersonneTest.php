<?php
require_once '../library/Personne.php';

class PersonneTest extends PHPUnit_Framework_TestCase
{
    private $_personne;

    protected function setUp()
    {
    	$this->_personne = new Personne('julien');
    }

    public function testPersonneInitialisee()
    {
        $this->assertEquals('julien',$this->_personne->getName());
    }

    public function testPersonneChangeEtage()
    {
        $this->_personne->setEtage(6);
        $this->assertEquals(6,$this->_personne->getEtage());
    }
}