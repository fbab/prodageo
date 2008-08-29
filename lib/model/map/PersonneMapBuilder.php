<?php



class PersonneMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.PersonneMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('personne');
		$tMap->setPhpName('Personne');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addForeignKey('DOSSIER_ID', 'DossierId', 'int', CreoleTypes::INTEGER, 'dossier', 'ID', false, null);

		$tMap->addColumn('NOM', 'Nom', 'string', CreoleTypes::VARCHAR, false, 255);

		$tMap->addColumn('PRENOM', 'Prenom', 'string', CreoleTypes::VARCHAR, false, 255);

		$tMap->addColumn('NUM_TELEPHONE', 'NumTelephone', 'string', CreoleTypes::VARCHAR, false, 255);

		$tMap->addColumn('SEXE', 'Sexe', 'string', CreoleTypes::VARCHAR, false, 255);

		$tMap->addColumn('DATE_NAISSANCE', 'DateNaissance', 'int', CreoleTypes::DATE, false, null);

		$tMap->addColumn('TRANCHE_AGE', 'TrancheAge', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addColumn('STATUT', 'Statut', 'string', CreoleTypes::VARCHAR, false, 255);

		$tMap->addColumn('ENFANTS', 'Enfants', 'string', CreoleTypes::VARCHAR, false, 255);

		$tMap->addColumn('NB_ENFANTS', 'NbEnfants', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addColumn('LIEU_NAISSANCE', 'LieuNaissance', 'string', CreoleTypes::VARCHAR, false, 255);

		$tMap->addColumn('NATIONALITE', 'Nationalite', 'string', CreoleTypes::VARCHAR, false, 255);

		$tMap->addColumn('ADRESSE_ACTUELLE', 'AdresseActuelle', 'string', CreoleTypes::VARCHAR, false, 255);

		$tMap->addColumn('VILLE_ACTUELLE', 'VilleActuelle', 'string', CreoleTypes::VARCHAR, false, 255);

		$tMap->addColumn('TYPE_LOGEMENT_ACTUEL', 'TypeLogementActuel', 'string', CreoleTypes::VARCHAR, false, 255);

		$tMap->addColumn('CATEGORIE_LOGEMENT_ACTUEL', 'CategorieLogementActuel', 'string', CreoleTypes::VARCHAR, false, 255);

		$tMap->addColumn('ORIGINE_DEMANDE', 'OrigineDemande', 'string', CreoleTypes::VARCHAR, false, 255);

		$tMap->addColumn('TYPE_STRUCTURE', 'TypeStructure', 'string', CreoleTypes::VARCHAR, false, 255);

		$tMap->addColumn('REFERENT', 'Referent', 'string', CreoleTypes::VARCHAR, false, 255);

		$tMap->addColumn('LOYER_ACTUEL', 'LoyerActuel', 'double', CreoleTypes::FLOAT, false, null);

		$tMap->addColumn('PROFESSION_ACTUELLE', 'ProfessionActuelle', 'string', CreoleTypes::VARCHAR, false, 255);

		$tMap->addColumn('EMPLOYEUR_ACTUEL', 'EmployeurActuel', 'string', CreoleTypes::VARCHAR, false, 255);

		$tMap->addColumn('VILLE_EMPLOYEUR_ACTUEL', 'VilleEmployeurActuel', 'string', CreoleTypes::VARCHAR, false, 255);

		$tMap->addColumn('DPT_EMPLOYEUR_ACTUEL', 'DptEmployeurActuel', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addColumn('DATE_EMBAUCHE', 'DateEmbauche', 'int', CreoleTypes::DATE, false, null);

		$tMap->addColumn('TYPE_CONTRAT', 'TypeContrat', 'string', CreoleTypes::VARCHAR, false, 255);

		$tMap->addColumn('TRANCHE_SALAIRE', 'TrancheSalaire', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addColumn('SALAIRE_EXACT', 'SalaireExact', 'double', CreoleTypes::FLOAT, false, null);

		$tMap->addColumn('DETTES_CREDITS', 'DettesCredits', 'double', CreoleTypes::FLOAT, false, null);

		$tMap->addColumn('MOTIF_RECHERCHE_LOGEMENT', 'MotifRechercheLogement', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('OBSERVATIONS', 'Observations', 'string', CreoleTypes::LONGVARCHAR, false, null);

	} 
} 