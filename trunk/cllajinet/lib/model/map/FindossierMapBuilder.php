<?php



class FindossierMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.FindossierMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('finDossier');
		$tMap->setPhpName('Findossier');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addForeignKey('DOSSIER_ID', 'DossierId', 'int', CreoleTypes::INTEGER, 'dossier', 'ID', false, null);

		$tMap->addColumn('TYPE_PARC', 'TypeParc', 'string', CreoleTypes::VARCHAR, false, 255);

		$tMap->addColumn('TYPE_PROPRIETAIRE_BAILLEUR', 'TypeProprietaireBailleur', 'string', CreoleTypes::VARCHAR, false, 255);

		$tMap->addColumn('NOM_PROPRIETAIRE_BAILLEUR', 'NomProprietaireBailleur', 'string', CreoleTypes::VARCHAR, false, 255);

		$tMap->addColumn('TYPE_CONDITION_ACCES', 'TypeConditionAcces', 'string', CreoleTypes::VARCHAR, false, 255);

		$tMap->addColumn('NOM_CONDITION_ACCES', 'NomConditionAcces', 'string', CreoleTypes::VARCHAR, false, 255);

		$tMap->addColumn('VILLE_LOGEMENT', 'VilleLogement', 'string', CreoleTypes::VARCHAR, false, 255);

		$tMap->addColumn('DEPARTEMENT_LOGEMENT', 'DepartementLogement', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addColumn('TYPE_LOGEMENT', 'TypeLogement', 'string', CreoleTypes::VARCHAR, false, 255);

		$tMap->addColumn('SUPERFICIE_LOGEMENT', 'SuperficieLogement', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addColumn('LOYER', 'Loyer', 'double', CreoleTypes::FLOAT, false, null);

		$tMap->addColumn('EDF_GDF', 'EdfGdf', 'double', CreoleTypes::FLOAT, false, null);

		$tMap->addColumn('CHAUFFAGE', 'Chauffage', 'double', CreoleTypes::FLOAT, false, null);

		$tMap->addColumn('DIFFICULTES_RENCONTREES', 'DifficultesRencontrees', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('CATEGORIE_CLASSEMENT', 'CategorieClassement', 'string', CreoleTypes::VARCHAR, false, 255);

	} 
} 