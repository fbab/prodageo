<?php
require_once 'Etudiant.php';
require_once 'PHPUnit/Framework.php';


class _EtudiantTest extends PHPUnit_Framework_TestCase
{
	private $_etudiant;

	protected function setUp()
	{
		$this->_etudiant = new Etudiant('15642', 'dub', 'tom', '01/02/03');
	}

	public function testPersonneInitialisee()
	{
		$this->assertEquals('dub',$this->_etudiant->getName());
		$this->assertEquals($this->_etudiant->getName(),(string)$this->_etudiant);
		$this->assertEquals('15642',$this->_etudiant->getNumEtu());
	}

	public function testUpdatename()
	{
		$this->_etudiant->updateName('porcher');
		$this->assertEquals('porcher',$this->_etudiant->getName());
	}

}
?>
