<?php



class StattableauMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.StattableauMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('statTableau');
		$tMap->setPhpName('Stattableau');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addForeignKey('STATISTIQUES_ID', 'StatistiquesId', 'int', CreoleTypes::INTEGER, 'statistiques', 'ID', false, null);

		$tMap->addColumn('NOMSTAT', 'Nomstat', 'string', CreoleTypes::VARCHAR, false, 255);

		$tMap->addColumn('VALEAURSID', 'Valeaursid', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addColumn('VALEURS', 'Valeurs', 'double', CreoleTypes::FLOAT, false, null);

	} 
} 