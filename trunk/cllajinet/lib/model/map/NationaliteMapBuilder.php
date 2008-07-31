<?php



class NationaliteMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.NationaliteMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('nationalite');
		$tMap->setPhpName('Nationalite');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('LISTNATIONALITE', 'Listnationalite', 'string', CreoleTypes::VARCHAR, false, 255);

	} 
} 