<?php



class ListerequetesMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.ListerequetesMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('listeRequetes');
		$tMap->setPhpName('Listerequetes');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('LISTREQUETES', 'Listrequetes', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('TITREREQUETES', 'Titrerequetes', 'string', CreoleTypes::VARCHAR, false, 255);

		$tMap->addColumn('ORDREREQUETES', 'Ordrerequetes', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addForeignKey('CHAPITRE_ID', 'ChapitreId', 'int', CreoleTypes::INTEGER, 'chapitre', 'ID', false, null);

	} 
} 