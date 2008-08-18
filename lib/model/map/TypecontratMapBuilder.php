<?php



class TypecontratMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.TypecontratMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('typeContrat');
		$tMap->setPhpName('Typecontrat');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('LISTTYPECONTRAT', 'Listtypecontrat', 'string', CreoleTypes::VARCHAR, false, 255);

	} 
} 