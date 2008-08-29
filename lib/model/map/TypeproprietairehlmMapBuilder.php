<?php



class TypeproprietairehlmMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.TypeproprietairehlmMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('typeProprietaireHLM');
		$tMap->setPhpName('Typeproprietairehlm');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('LISTTYPEPROPRIETAIREHLM', 'Listtypeproprietairehlm', 'string', CreoleTypes::VARCHAR, false, 255);

	} 
} 