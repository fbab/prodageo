<?php
require_once 'Etudiant.php';
require_once 'PHPUnit/Framework.php';


class _EtudiantTest extends PHPUnit_Framework_TestCase
{
	private $_etudiant;

	protected function setUp()
	{
		$this->_etudiant = new Etudiant('0258962', 'belat', 'aurélie', '05/01/86');
	}

	public function testPersonneInitialisee()
	{
		$this->assertEquals('belat',$this->_etudiant->getName());
		$this->assertEquals($this->_etudiant->getName(),(string)$this->_etudiant);
	}

	public function testUpdatename()
	{
		$this->_etudiant->updateName('porcher');
		$this->assertEquals('porcher',$this->_etudiant->getName());
	}

}
?>
