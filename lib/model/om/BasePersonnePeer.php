<?php


abstract class BasePersonnePeer {

	
	const DATABASE_NAME = 'propel';

	
	const TABLE_NAME = 'personne';

	
	const CLASS_DEFAULT = 'lib.model.Personne';

	
	const NUM_COLUMNS = 32;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'personne.ID';

	
	const DOSSIER_ID = 'personne.DOSSIER_ID';

	
	const NOM = 'personne.NOM';

	
	const PRENOM = 'personne.PRENOM';

	
	const NUM_TELEPHONE = 'personne.NUM_TELEPHONE';

	
	const SEXE = 'personne.SEXE';

	
	const DATE_NAISSANCE = 'personne.DATE_NAISSANCE';

	
	const TRANCHE_AGE = 'personne.TRANCHE_AGE';

	
	const STATUT = 'personne.STATUT';

	
	const ENFANTS = 'personne.ENFANTS';

	
	const NB_ENFANTS = 'personne.NB_ENFANTS';

	
	const LIEU_NAISSANCE = 'personne.LIEU_NAISSANCE';

	
	const NATIONALITE = 'personne.NATIONALITE';

	
	const ADRESSE_ACTUELLE = 'personne.ADRESSE_ACTUELLE';

	
	const VILLE_ACTUELLE = 'personne.VILLE_ACTUELLE';

	
	const TYPE_LOGEMENT_ACTUEL = 'personne.TYPE_LOGEMENT_ACTUEL';

	
	const CATEGORIE_LOGEMENT_ACTUEL = 'personne.CATEGORIE_LOGEMENT_ACTUEL';

	
	const ORIGINE_DEMANDE = 'personne.ORIGINE_DEMANDE';

	
	const TYPE_STRUCTURE = 'personne.TYPE_STRUCTURE';

	
	const REFERENT = 'personne.REFERENT';

	
	const LOYER_ACTUEL = 'personne.LOYER_ACTUEL';

	
	const PROFESSION_ACTUELLE = 'personne.PROFESSION_ACTUELLE';

	
	const EMPLOYEUR_ACTUEL = 'personne.EMPLOYEUR_ACTUEL';

	
	const VILLE_EMPLOYEUR_ACTUEL = 'personne.VILLE_EMPLOYEUR_ACTUEL';

	
	const DPT_EMPLOYEUR_ACTUEL = 'personne.DPT_EMPLOYEUR_ACTUEL';

	
	const DATE_EMBAUCHE = 'personne.DATE_EMBAUCHE';

	
	const TYPE_CONTRAT = 'personne.TYPE_CONTRAT';

	
	const TRANCHE_SALAIRE = 'personne.TRANCHE_SALAIRE';

	
	const SALAIRE_EXACT = 'personne.SALAIRE_EXACT';

	
	const DETTES_CREDITS = 'personne.DETTES_CREDITS';

	
	const MOTIF_RECHERCHE_LOGEMENT = 'personne.MOTIF_RECHERCHE_LOGEMENT';

	
	const OBSERVATIONS = 'personne.OBSERVATIONS';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'DossierId', 'Nom', 'Prenom', 'NumTelephone', 'Sexe', 'DateNaissance', 'TrancheAge', 'Statut', 'Enfants', 'NbEnfants', 'LieuNaissance', 'Nationalite', 'AdresseActuelle', 'VilleActuelle', 'TypeLogementActuel', 'CategorieLogementActuel', 'OrigineDemande', 'TypeStructure', 'Referent', 'LoyerActuel', 'ProfessionActuelle', 'EmployeurActuel', 'VilleEmployeurActuel', 'DptEmployeurActuel', 'DateEmbauche', 'TypeContrat', 'TrancheSalaire', 'SalaireExact', 'DettesCredits', 'MotifRechercheLogement', 'Observations', ),
		BasePeer::TYPE_COLNAME => array (PersonnePeer::ID, PersonnePeer::DOSSIER_ID, PersonnePeer::NOM, PersonnePeer::PRENOM, PersonnePeer::NUM_TELEPHONE, PersonnePeer::SEXE, PersonnePeer::DATE_NAISSANCE, PersonnePeer::TRANCHE_AGE, PersonnePeer::STATUT, PersonnePeer::ENFANTS, PersonnePeer::NB_ENFANTS, PersonnePeer::LIEU_NAISSANCE, PersonnePeer::NATIONALITE, PersonnePeer::ADRESSE_ACTUELLE, PersonnePeer::VILLE_ACTUELLE, PersonnePeer::TYPE_LOGEMENT_ACTUEL, PersonnePeer::CATEGORIE_LOGEMENT_ACTUEL, PersonnePeer::ORIGINE_DEMANDE, PersonnePeer::TYPE_STRUCTURE, PersonnePeer::REFERENT, PersonnePeer::LOYER_ACTUEL, PersonnePeer::PROFESSION_ACTUELLE, PersonnePeer::EMPLOYEUR_ACTUEL, PersonnePeer::VILLE_EMPLOYEUR_ACTUEL, PersonnePeer::DPT_EMPLOYEUR_ACTUEL, PersonnePeer::DATE_EMBAUCHE, PersonnePeer::TYPE_CONTRAT, PersonnePeer::TRANCHE_SALAIRE, PersonnePeer::SALAIRE_EXACT, PersonnePeer::DETTES_CREDITS, PersonnePeer::MOTIF_RECHERCHE_LOGEMENT, PersonnePeer::OBSERVATIONS, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'dossier_id', 'nom', 'prenom', 'num_telephone', 'sexe', 'date_naissance', 'tranche_age', 'statut', 'enfants', 'nb_enfants', 'lieu_naissance', 'nationalite', 'adresse_actuelle', 'ville_actuelle', 'type_logement_actuel', 'categorie_logement_actuel', 'origine_demande', 'type_structure', 'referent', 'loyer_actuel', 'profession_actuelle', 'employeur_actuel', 'ville_employeur_actuel', 'dpt_employeur_actuel', 'date_embauche', 'type_contrat', 'tranche_salaire', 'salaire_exact', 'dettes_credits', 'motif_recherche_logement', 'observations', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'DossierId' => 1, 'Nom' => 2, 'Prenom' => 3, 'NumTelephone' => 4, 'Sexe' => 5, 'DateNaissance' => 6, 'TrancheAge' => 7, 'Statut' => 8, 'Enfants' => 9, 'NbEnfants' => 10, 'LieuNaissance' => 11, 'Nationalite' => 12, 'AdresseActuelle' => 13, 'VilleActuelle' => 14, 'TypeLogementActuel' => 15, 'CategorieLogementActuel' => 16, 'OrigineDemande' => 17, 'TypeStructure' => 18, 'Referent' => 19, 'LoyerActuel' => 20, 'ProfessionActuelle' => 21, 'EmployeurActuel' => 22, 'VilleEmployeurActuel' => 23, 'DptEmployeurActuel' => 24, 'DateEmbauche' => 25, 'TypeContrat' => 26, 'TrancheSalaire' => 27, 'SalaireExact' => 28, 'DettesCredits' => 29, 'MotifRechercheLogement' => 30, 'Observations' => 31, ),
		BasePeer::TYPE_COLNAME => array (PersonnePeer::ID => 0, PersonnePeer::DOSSIER_ID => 1, PersonnePeer::NOM => 2, PersonnePeer::PRENOM => 3, PersonnePeer::NUM_TELEPHONE => 4, PersonnePeer::SEXE => 5, PersonnePeer::DATE_NAISSANCE => 6, PersonnePeer::TRANCHE_AGE => 7, PersonnePeer::STATUT => 8, PersonnePeer::ENFANTS => 9, PersonnePeer::NB_ENFANTS => 10, PersonnePeer::LIEU_NAISSANCE => 11, PersonnePeer::NATIONALITE => 12, PersonnePeer::ADRESSE_ACTUELLE => 13, PersonnePeer::VILLE_ACTUELLE => 14, PersonnePeer::TYPE_LOGEMENT_ACTUEL => 15, PersonnePeer::CATEGORIE_LOGEMENT_ACTUEL => 16, PersonnePeer::ORIGINE_DEMANDE => 17, PersonnePeer::TYPE_STRUCTURE => 18, PersonnePeer::REFERENT => 19, PersonnePeer::LOYER_ACTUEL => 20, PersonnePeer::PROFESSION_ACTUELLE => 21, PersonnePeer::EMPLOYEUR_ACTUEL => 22, PersonnePeer::VILLE_EMPLOYEUR_ACTUEL => 23, PersonnePeer::DPT_EMPLOYEUR_ACTUEL => 24, PersonnePeer::DATE_EMBAUCHE => 25, PersonnePeer::TYPE_CONTRAT => 26, PersonnePeer::TRANCHE_SALAIRE => 27, PersonnePeer::SALAIRE_EXACT => 28, PersonnePeer::DETTES_CREDITS => 29, PersonnePeer::MOTIF_RECHERCHE_LOGEMENT => 30, PersonnePeer::OBSERVATIONS => 31, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'dossier_id' => 1, 'nom' => 2, 'prenom' => 3, 'num_telephone' => 4, 'sexe' => 5, 'date_naissance' => 6, 'tranche_age' => 7, 'statut' => 8, 'enfants' => 9, 'nb_enfants' => 10, 'lieu_naissance' => 11, 'nationalite' => 12, 'adresse_actuelle' => 13, 'ville_actuelle' => 14, 'type_logement_actuel' => 15, 'categorie_logement_actuel' => 16, 'origine_demande' => 17, 'type_structure' => 18, 'referent' => 19, 'loyer_actuel' => 20, 'profession_actuelle' => 21, 'employeur_actuel' => 22, 'ville_employeur_actuel' => 23, 'dpt_employeur_actuel' => 24, 'date_embauche' => 25, 'type_contrat' => 26, 'tranche_salaire' => 27, 'salaire_exact' => 28, 'dettes_credits' => 29, 'motif_recherche_logement' => 30, 'observations' => 31, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, )
	);

	
	public static function getMapBuilder()
	{
		return BasePeer::getMapBuilder('lib.model.map.PersonneMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = PersonnePeer::getTableMap();
			$columns = $map->getColumns();
			$nameMap = array();
			foreach ($columns as $column) {
				$nameMap[$column->getPhpName()] = $column->getColumnName();
			}
			self::$phpNameMap = $nameMap;
		}
		return self::$phpNameMap;
	}
	
	static public function translateFieldName($name, $fromType, $toType)
	{
		$toNames = self::getFieldNames($toType);
		$key = isset(self::$fieldKeys[$fromType][$name]) ? self::$fieldKeys[$fromType][$name] : null;
		if ($key === null) {
			throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(self::$fieldKeys[$fromType], true));
		}
		return $toNames[$key];
	}

	

	static public function getFieldNames($type = BasePeer::TYPE_PHPNAME)
	{
		if (!array_key_exists($type, self::$fieldNames)) {
			throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants TYPE_PHPNAME, TYPE_COLNAME, TYPE_FIELDNAME, TYPE_NUM. ' . $type . ' was given.');
		}
		return self::$fieldNames[$type];
	}

	
	public static function alias($alias, $column)
	{
		return str_replace(PersonnePeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(PersonnePeer::ID);

		$criteria->addSelectColumn(PersonnePeer::DOSSIER_ID);

		$criteria->addSelectColumn(PersonnePeer::NOM);

		$criteria->addSelectColumn(PersonnePeer::PRENOM);

		$criteria->addSelectColumn(PersonnePeer::NUM_TELEPHONE);

		$criteria->addSelectColumn(PersonnePeer::SEXE);

		$criteria->addSelectColumn(PersonnePeer::DATE_NAISSANCE);

		$criteria->addSelectColumn(PersonnePeer::TRANCHE_AGE);

		$criteria->addSelectColumn(PersonnePeer::STATUT);

		$criteria->addSelectColumn(PersonnePeer::ENFANTS);

		$criteria->addSelectColumn(PersonnePeer::NB_ENFANTS);

		$criteria->addSelectColumn(PersonnePeer::LIEU_NAISSANCE);

		$criteria->addSelectColumn(PersonnePeer::NATIONALITE);

		$criteria->addSelectColumn(PersonnePeer::ADRESSE_ACTUELLE);

		$criteria->addSelectColumn(PersonnePeer::VILLE_ACTUELLE);

		$criteria->addSelectColumn(PersonnePeer::TYPE_LOGEMENT_ACTUEL);

		$criteria->addSelectColumn(PersonnePeer::CATEGORIE_LOGEMENT_ACTUEL);

		$criteria->addSelectColumn(PersonnePeer::ORIGINE_DEMANDE);

		$criteria->addSelectColumn(PersonnePeer::TYPE_STRUCTURE);

		$criteria->addSelectColumn(PersonnePeer::REFERENT);

		$criteria->addSelectColumn(PersonnePeer::LOYER_ACTUEL);

		$criteria->addSelectColumn(PersonnePeer::PROFESSION_ACTUELLE);

		$criteria->addSelectColumn(PersonnePeer::EMPLOYEUR_ACTUEL);

		$criteria->addSelectColumn(PersonnePeer::VILLE_EMPLOYEUR_ACTUEL);

		$criteria->addSelectColumn(PersonnePeer::DPT_EMPLOYEUR_ACTUEL);

		$criteria->addSelectColumn(PersonnePeer::DATE_EMBAUCHE);

		$criteria->addSelectColumn(PersonnePeer::TYPE_CONTRAT);

		$criteria->addSelectColumn(PersonnePeer::TRANCHE_SALAIRE);

		$criteria->addSelectColumn(PersonnePeer::SALAIRE_EXACT);

		$criteria->addSelectColumn(PersonnePeer::DETTES_CREDITS);

		$criteria->addSelectColumn(PersonnePeer::MOTIF_RECHERCHE_LOGEMENT);

		$criteria->addSelectColumn(PersonnePeer::OBSERVATIONS);

	}

	const COUNT = 'COUNT(personne.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT personne.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(PersonnePeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(PersonnePeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = PersonnePeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}
	
	public static function doSelectOne(Criteria $criteria, $con = null)
	{
		$critcopy = clone $criteria;
		$critcopy->setLimit(1);
		$objects = PersonnePeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return PersonnePeer::populateObjects(PersonnePeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			PersonnePeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = PersonnePeer::getOMClass();
		$cls = Propel::import($cls);
				while($rs->next()) {
		
			$obj = new $cls();
			$obj->hydrate($rs);
			$results[] = $obj;
			
		}
		return $results;
	}

	
	public static function doCountJoinDossier(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(PersonnePeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(PersonnePeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(PersonnePeer::DOSSIER_ID, DossierPeer::ID);

		$rs = PersonnePeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doSelectJoinDossier(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		PersonnePeer::addSelectColumns($c);
		$startcol = (PersonnePeer::NUM_COLUMNS - PersonnePeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		DossierPeer::addSelectColumns($c);

		$c->addJoin(PersonnePeer::DOSSIER_ID, DossierPeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = PersonnePeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = DossierPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol);

			$newObject = true;
			foreach($results as $temp_obj1) {
				$temp_obj2 = $temp_obj1->getDossier(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
										$temp_obj2->addPersonne($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initPersonnes();
				$obj2->addPersonne($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doCountJoinAll(Criteria $criteria, $distinct = false, $con = null)
	{
		$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(PersonnePeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(PersonnePeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(PersonnePeer::DOSSIER_ID, DossierPeer::ID);

		$rs = PersonnePeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doSelectJoinAll(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		PersonnePeer::addSelectColumns($c);
		$startcol2 = (PersonnePeer::NUM_COLUMNS - PersonnePeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		DossierPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + DossierPeer::NUM_COLUMNS;

		$c->addJoin(PersonnePeer::DOSSIER_ID, DossierPeer::ID);

		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = PersonnePeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);


					
			$omClass = DossierPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getDossier(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addPersonne($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj2->initPersonnes();
				$obj2->addPersonne($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}


  static public function getUniqueColumnNames()
  {
    return array();
  }
	
	public static function getTableMap()
	{
		return Propel::getDatabaseMap(self::DATABASE_NAME)->getTable(self::TABLE_NAME);
	}

	
	public static function getOMClass()
	{
		return PersonnePeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(PersonnePeer::ID); 

				$criteria->setDbName(self::DATABASE_NAME);

		try {
									$con->begin();
			$pk = BasePeer::doInsert($criteria, $con);
			$con->commit();
		} catch(PropelException $e) {
			$con->rollback();
			throw $e;
		}

		return $pk;
	}

	
	public static function doUpdate($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		$selectCriteria = new Criteria(self::DATABASE_NAME);

		if ($values instanceof Criteria) {
			$criteria = clone $values; 
			$comparison = $criteria->getComparison(PersonnePeer::ID);
			$selectCriteria->add(PersonnePeer::ID, $criteria->remove(PersonnePeer::ID), $comparison);

		} else { 			$criteria = $values->buildCriteria(); 			$selectCriteria = $values->buildPkeyCriteria(); 		}

				$criteria->setDbName(self::DATABASE_NAME);

		return BasePeer::doUpdate($selectCriteria, $criteria, $con);
	}

	
	public static function doDeleteAll($con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}
		$affectedRows = 0; 		try {
									$con->begin();
			$affectedRows += BasePeer::doDeleteAll(PersonnePeer::TABLE_NAME, $con);
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	 public static function doDelete($values, $con = null)
	 {
		if ($con === null) {
			$con = Propel::getConnection(PersonnePeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof Personne) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(PersonnePeer::ID, (array) $values, Criteria::IN);
		}

				$criteria->setDbName(self::DATABASE_NAME);

		$affectedRows = 0; 
		try {
									$con->begin();
			
			$affectedRows += BasePeer::doDelete($criteria, $con);
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	public static function doValidate(Personne $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(PersonnePeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(PersonnePeer::TABLE_NAME);

			if (! is_array($cols)) {
				$cols = array($cols);
			}

			foreach($cols as $colName) {
				if ($tableMap->containsColumn($colName)) {
					$get = 'get' . $tableMap->getColumn($colName)->getPhpName();
					$columns[$colName] = $obj->$get();
				}
			}
		} else {

		}

		$res =  BasePeer::doValidate(PersonnePeer::DATABASE_NAME, PersonnePeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = PersonnePeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
            $request->setError($col, $failed->getMessage());
        }
    }

    return $res;
	}

	
	public static function retrieveByPK($pk, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		$criteria = new Criteria(PersonnePeer::DATABASE_NAME);

		$criteria->add(PersonnePeer::ID, $pk);


		$v = PersonnePeer::doSelect($criteria, $con);

		return !empty($v) > 0 ? $v[0] : null;
	}

	
	public static function retrieveByPKs($pks, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		$objs = null;
		if (empty($pks)) {
			$objs = array();
		} else {
			$criteria = new Criteria();
			$criteria->add(PersonnePeer::ID, $pks, Criteria::IN);
			$objs = PersonnePeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BasePersonnePeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			Propel::registerMapBuilder('lib.model.map.PersonneMapBuilder');
}
