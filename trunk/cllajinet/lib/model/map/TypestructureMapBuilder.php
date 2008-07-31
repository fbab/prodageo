<?php



class TypestructureMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.TypestructureMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('typeStructure');
		$tMap->setPhpName('Typestructure');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('LISTTYPESTRUCTURE', 'Listtypestructure', 'string', CreoleTypes::VARCHAR, false, 255);

	} 
} 