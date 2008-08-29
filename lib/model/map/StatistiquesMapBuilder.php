<?php



class StatistiquesMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.StatistiquesMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('statistiques');
		$tMap->setPhpName('Statistiques');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('DATESTAT', 'Datestat', 'int', CreoleTypes::DATE, false, null);

		$tMap->addColumn('NBMENAGESRECU', 'Nbmenagesrecu', 'double', CreoleTypes::FLOAT, false, null);

		$tMap->addColumn('NBADULTESRECU', 'Nbadultesrecu', 'double', CreoleTypes::FLOAT, false, null);

		$tMap->addColumn('NBENFANTSRECU', 'Nbenfantsrecu', 'double', CreoleTypes::FLOAT, false, null);

		$tMap->addColumn('NBLOGES', 'Nbloges', 'double', CreoleTypes::FLOAT, false, null);

		$tMap->addColumn('NBLOGESADULTES', 'Nblogesadultes', 'double', CreoleTypes::FLOAT, false, null);

		$tMap->addColumn('NBLOGESENFANTS', 'Nblogesenfants', 'double', CreoleTypes::FLOAT, false, null);

		$tMap->addColumn('NBLOGESDIRECT', 'Nblogesdirect', 'double', CreoleTypes::FLOAT, false, null);

		$tMap->addColumn('NBLOGESDIRECTADULTES', 'Nblogesdirectadultes', 'double', CreoleTypes::FLOAT, false, null);

		$tMap->addColumn('NBLOGESDIRECTENFANTS', 'Nblogesdirectenfants', 'double', CreoleTypes::FLOAT, false, null);

		$tMap->addColumn('NBLOGESINDIRECT', 'Nblogesindirect', 'double', CreoleTypes::FLOAT, false, null);

		$tMap->addColumn('NBLOGESINDIRECTADULTES', 'Nblogesindirectadultes', 'double', CreoleTypes::FLOAT, false, null);

		$tMap->addColumn('NBLOGESINDIRECTENFANTS', 'Nblogesindirectenfants', 'double', CreoleTypes::FLOAT, false, null);

		$tMap->addColumn('NBALTSOUSLOC', 'Nbaltsousloc', 'double', CreoleTypes::FLOAT, false, null);

		$tMap->addColumn('NBALTSOUSLOCADULTES', 'Nbaltsouslocadultes', 'double', CreoleTypes::FLOAT, false, null);

		$tMap->addColumn('NBALTSOUSLOCENFANTS', 'Nbaltsouslocenfants', 'double', CreoleTypes::FLOAT, false, null);

		$tMap->addColumn('NBENCOURS', 'Nbencours', 'double', CreoleTypes::FLOAT, false, null);

		$tMap->addColumn('NBENCOURSADULTES', 'Nbencoursadultes', 'double', CreoleTypes::FLOAT, false, null);

		$tMap->addColumn('NBENCOURSENFANTS', 'Nbencoursenfants', 'double', CreoleTypes::FLOAT, false, null);

		$tMap->addColumn('NBABANDON', 'Nbabandon', 'double', CreoleTypes::FLOAT, false, null);

		$tMap->addColumn('NBABANDONADULTES', 'Nbabandonadultes', 'double', CreoleTypes::FLOAT, false, null);

		$tMap->addColumn('NBABANDONENFANTS', 'Nbabandonenfants', 'double', CreoleTypes::FLOAT, false, null);

		$tMap->addColumn('SEXE', 'Sexe', 'double', CreoleTypes::FLOAT, false, null);

		$tMap->addColumn('TRANCHEAGE', 'Trancheage', 'double', CreoleTypes::FLOAT, false, null);

		$tMap->addColumn('NATIONALITE', 'Nationalite', 'double', CreoleTypes::FLOAT, false, null);

		$tMap->addColumn('SITUATIONFAMILIALE', 'Situationfamiliale', 'double', CreoleTypes::FLOAT, false, null);

		$tMap->addColumn('ORIGINEDEMANDE', 'Originedemande', 'double', CreoleTypes::FLOAT, false, null);

		$tMap->addColumn('VILLERESIDENCE', 'Villeresidence', 'double', CreoleTypes::FLOAT, false, null);

		$tMap->addColumn('MODEHEBERGEMENT', 'Modehebergement', 'double', CreoleTypes::FLOAT, false, null);

		$tMap->addColumn('LIEUTRAVAIL', 'Lieutravail', 'double', CreoleTypes::FLOAT, false, null);

		$tMap->addColumn('TYPECONTRAT', 'Typecontrat', 'double', CreoleTypes::FLOAT, false, null);

		$tMap->addColumn('REVENUS', 'Revenus', 'double', CreoleTypes::FLOAT, false, null);

		$tMap->addColumn('SEXELOGES', 'Sexeloges', 'double', CreoleTypes::FLOAT, false, null);

		$tMap->addColumn('TRANCHEAGELOGES', 'Trancheageloges', 'double', CreoleTypes::FLOAT, false, null);

		$tMap->addColumn('NATIONALITELOGES', 'Nationaliteloges', 'double', CreoleTypes::FLOAT, false, null);

		$tMap->addColumn('SITUATIONFAMILIALELOGES', 'Situationfamilialeloges', 'double', CreoleTypes::FLOAT, false, null);

		$tMap->addColumn('ORIGINEDEMANDELOGES', 'Originedemandeloges', 'double', CreoleTypes::FLOAT, false, null);

		$tMap->addColumn('VILLERESIDENCELOGES', 'Villeresidenceloges', 'double', CreoleTypes::FLOAT, false, null);

		$tMap->addColumn('MODEHEBERGEMENTLOGES', 'Modehebergementloges', 'double', CreoleTypes::FLOAT, false, null);

		$tMap->addColumn('LIEUTRAVAILLOGES', 'Lieutravailloges', 'double', CreoleTypes::FLOAT, false, null);

		$tMap->addColumn('TYPECONTRATLOGES', 'Typecontratloges', 'double', CreoleTypes::FLOAT, false, null);

		$tMap->addColumn('REVENUSLOGES', 'Revenusloges', 'double', CreoleTypes::FLOAT, false, null);

		$tMap->addColumn('TYPELOGEMENTTROUVELOGES', 'Typelogementtrouveloges', 'double', CreoleTypes::FLOAT, false, null);

		$tMap->addColumn('TYPEPROPRIETAIRELOGES', 'Typeproprietaireloges', 'double', CreoleTypes::FLOAT, false, null);

		$tMap->addColumn('VILLELOGEMENTTROUVELOGES', 'Villelogementtrouveloges', 'double', CreoleTypes::FLOAT, false, null);

		$tMap->addColumn('NBRECU', 'Nbrecu', 'double', CreoleTypes::FLOAT, false, null);

		$tMap->addColumn('NBABANDONS', 'Nbabandons', 'double', CreoleTypes::FLOAT, false, null);

	} 
} 