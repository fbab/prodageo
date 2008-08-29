<?php



class ChapitreMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.ChapitreMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('chapitre');
		$tMap->setPhpName('Chapitre');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('ANNEECREATION', 'Anneecreation', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addColumn('ANNEESUPRESSION', 'Anneesupression', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addColumn('TITRECHAPITRE', 'Titrechapitre', 'string', CreoleTypes::VARCHAR, false, 255);

		$tMap->addColumn('CHAPITREPARENT', 'Chapitreparent', 'string', CreoleTypes::VARCHAR, false, 255);

	} 
} 