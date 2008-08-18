<?php



class DossierMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.DossierMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('dossier');
		$tMap->setPhpName('Dossier');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('DATE_OUVERTURE_DOSSIER', 'DateOuvertureDossier', 'int', CreoleTypes::DATE, false, null);

		$tMap->addColumn('DATE_CLOTURE_DOSSIER', 'DateClotureDossier', 'int', CreoleTypes::DATE, false, null);

		$tMap->addColumn('TYPE_DOSSIER', 'TypeDossier', 'string', CreoleTypes::VARCHAR, false, 255);

	} 
} 