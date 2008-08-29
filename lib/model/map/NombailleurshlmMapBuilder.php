<?php



class NombailleurshlmMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.NombailleurshlmMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('nomBailleursHLM');
		$tMap->setPhpName('Nombailleurshlm');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('LISTNOMBAILLEURSHLM', 'Listnombailleurshlm', 'string', CreoleTypes::VARCHAR, false, 255);

	} 
} 