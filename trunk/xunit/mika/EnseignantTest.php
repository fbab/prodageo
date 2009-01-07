<!--Tests de la classe Enseignant du projet LogIFIPS-->

<?php
require_once '../library/Personne.php';

class EnseignantTest extends PHPUnit_Framework_TestCase
{
    private $_personne;

    protected function setUp()
    {
    	$this->_personne = new Enseignant('Matthieu','Mika');
    }

    public function testEnseignantInitialisee()
    {
        $this->assertEquals('Matthieu',$this->_personne->getNom());
        $this->assertEquals('Mika',$this->_personne->getPrenom());
    }

    public function testEnsignantSetNom()
    {
        $this->_personne->setNom('Thomas');
        $this->assertEquals('Thomas',$this->_personne->getNom());
    }
    
    public function testEnsignantSetPrenom()
    {
        $this->_personne->setNom('Dupont');
        $this->assertEquals('Dupont',$this->_personne->getPrenom());
    }
}
?>