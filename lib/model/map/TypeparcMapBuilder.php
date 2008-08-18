<?php



class TypeparcMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.TypeparcMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('typeParc');
		$tMap->setPhpName('Typeparc');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('LISTTYPEPARC', 'Listtypeparc', 'string', CreoleTypes::VARCHAR, false, 255);

	} 
} 