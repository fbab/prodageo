<?php


require_once 'Personne.php';
require_once 'PHPUnit/Framework.php';

class PersonneTest extends PHPUnit_Framwork_TestCase
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

?>