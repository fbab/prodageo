<?php



class NomfjtMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.NomfjtMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('nomFJT');
		$tMap->setPhpName('Nomfjt');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('LISTNOMFJT', 'Listnomfjt', 'string', CreoleTypes::VARCHAR, false, 255);

	} 
} 