<?php



class NomlocapassMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.NomlocapassMapBuilder';

	
	private $dbMap;

	
	public function isBuilt()
	{
		return ($this->dbMap !== null);
	}

	
	public function getDatabaseMap()
	{
		return $this->dbMap;
	}

	
	public function doBuild()
	{
		$this->dbMap = Propel::getDatabaseMap('propel');

		$tMap = $this->dbMap->addTable('nomLocapass');
		$tMap->setPhpName('Nomlocapass');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('LISTNOMLOCAPASS', 'Listnomlocapass', 'string', CreoleTypes::VARCHAR, false, 255);

	} 
} 