<?php



class TypelogementMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.TypelogementMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('typeLogement');
		$tMap->setPhpName('Typelogement');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('LISTTYPELOGEMENT', 'Listtypelogement', 'string', CreoleTypes::VARCHAR, false, 255);

	} 
} 