<?php



class TypeproprietairehebtempMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.TypeproprietairehebtempMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('typeProprietaireHebTemp');
		$tMap->setPhpName('Typeproprietairehebtemp');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('LISTTYPEPROPRIETAIREHEBTEMP', 'Listtypeproprietairehebtemp', 'string', CreoleTypes::VARCHAR, false, 255);

	} 
} 