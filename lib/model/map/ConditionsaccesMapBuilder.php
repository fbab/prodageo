<?php



class ConditionsaccesMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.ConditionsaccesMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('conditionsAcces');
		$tMap->setPhpName('Conditionsacces');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('LISTCONDITIONSACCES', 'Listconditionsacces', 'string', CreoleTypes::VARCHAR, false, 255);

	} 
} 