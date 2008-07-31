<?php



class TypeproprietairepriveMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.TypeproprietairepriveMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('typeProprietairePrive');
		$tMap->setPhpName('Typeproprietaireprive');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('LISTTYPEPROPRIETAIREPRIVE', 'Listtypeproprietaireprive', 'string', CreoleTypes::VARCHAR, false, 255);

	} 
} 