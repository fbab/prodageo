<?php


abstract class BaseFindossierPeer {

	
	const DATABASE_NAME = 'propel';

	
	const TABLE_NAME = 'finDossier';

	
	const CLASS_DEFAULT = 'lib.model.Findossier';

	
	const NUM_COLUMNS = 16;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'finDossier.ID';

	
	const DOSSIER_ID = 'finDossier.DOSSIER_ID';

	
	const TYPE_PARC = 'finDossier.TYPE_PARC';

	
	const TYPE_PROPRIETAIRE_BAILLEUR = 'finDossier.TYPE_PROPRIETAIRE_BAILLEUR';

	
	const NOM_PROPRIETAIRE_BAILLEUR = 'finDossier.NOM_PROPRIETAIRE_BAILLEUR';

	
	const TYPE_CONDITION_ACCES = 'finDossier.TYPE_CONDITION_ACCES';

	
	const NOM_CONDITION_ACCES = 'finDossier.NOM_CONDITION_ACCES';

	
	const VILLE_LOGEMENT = 'finDossier.VILLE_LOGEMENT';

	
	const DEPARTEMENT_LOGEMENT = 'finDossier.DEPARTEMENT_LOGEMENT';

	
	const TYPE_LOGEMENT = 'finDossier.TYPE_LOGEMENT';

	
	const SUPERFICIE_LOGEMENT = 'finDossier.SUPERFICIE_LOGEMENT';

	
	const LOYER = 'finDossier.LOYER';

	
	const EDF_GDF = 'finDossier.EDF_GDF';

	
	const CHAUFFAGE = 'finDossier.CHAUFFAGE';

	
	const DIFFICULTES_RENCONTREES = 'finDossier.DIFFICULTES_RENCONTREES';

	
	const CATEGORIE_CLASSEMENT = 'finDossier.CATEGORIE_CLASSEMENT';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'DossierId', 'TypeParc', 'TypeProprietaireBailleur', 'NomProprietaireBailleur', 'TypeConditionAcces', 'NomConditionAcces', 'VilleLogement', 'DepartementLogement', 'TypeLogement', 'SuperficieLogement', 'Loyer', 'EdfGdf', 'Chauffage', 'DifficultesRencontrees', 'CategorieClassement', ),
		BasePeer::TYPE_COLNAME => array (FindossierPeer::ID, FindossierPeer::DOSSIER_ID, FindossierPeer::TYPE_PARC, FindossierPeer::TYPE_PROPRIETAIRE_BAILLEUR, FindossierPeer::NOM_PROPRIETAIRE_BAILLEUR, FindossierPeer::TYPE_CONDITION_ACCES, FindossierPeer::NOM_CONDITION_ACCES, FindossierPeer::VILLE_LOGEMENT, FindossierPeer::DEPARTEMENT_LOGEMENT, FindossierPeer::TYPE_LOGEMENT, FindossierPeer::SUPERFICIE_LOGEMENT, FindossierPeer::LOYER, FindossierPeer::EDF_GDF, FindossierPeer::CHAUFFAGE, FindossierPeer::DIFFICULTES_RENCONTREES, FindossierPeer::CATEGORIE_CLASSEMENT, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'dossier_id', 'type_parc', 'type_proprietaire_bailleur', 'nom_proprietaire_bailleur', 'type_condition_acces', 'nom_condition_acces', 'ville_logement', 'departement_logement', 'type_logement', 'superficie_logement', 'loyer', 'edf_gdf', 'chauffage', 'difficultes_rencontrees', 'categorie_classement', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'DossierId' => 1, 'TypeParc' => 2, 'TypeProprietaireBailleur' => 3, 'NomProprietaireBailleur' => 4, 'TypeConditionAcces' => 5, 'NomConditionAcces' => 6, 'VilleLogement' => 7, 'DepartementLogement' => 8, 'TypeLogement' => 9, 'SuperficieLogement' => 10, 'Loyer' => 11, 'EdfGdf' => 12, 'Chauffage' => 13, 'DifficultesRencontrees' => 14, 'CategorieClassement' => 15, ),
		BasePeer::TYPE_COLNAME => array (FindossierPeer::ID => 0, FindossierPeer::DOSSIER_ID => 1, FindossierPeer::TYPE_PARC => 2, FindossierPeer::TYPE_PROPRIETAIRE_BAILLEUR => 3, FindossierPeer::NOM_PROPRIETAIRE_BAILLEUR => 4, FindossierPeer::TYPE_CONDITION_ACCES => 5, FindossierPeer::NOM_CONDITION_ACCES => 6, FindossierPeer::VILLE_LOGEMENT => 7, FindossierPeer::DEPARTEMENT_LOGEMENT => 8, FindossierPeer::TYPE_LOGEMENT => 9, FindossierPeer::SUPERFICIE_LOGEMENT => 10, FindossierPeer::LOYER => 11, FindossierPeer::EDF_GDF => 12, FindossierPeer::CHAUFFAGE => 13, FindossierPeer::DIFFICULTES_RENCONTREES => 14, FindossierPeer::CATEGORIE_CLASSEMENT => 15, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'dossier_id' => 1, 'type_parc' => 2, 'type_proprietaire_bailleur' => 3, 'nom_proprietaire_bailleur' => 4, 'type_condition_acces' => 5, 'nom_condition_acces' => 6, 'ville_logement' => 7, 'departement_logement' => 8, 'type_logement' => 9, 'superficie_logement' => 10, 'loyer' => 11, 'edf_gdf' => 12, 'chauffage' => 13, 'difficultes_rencontrees' => 14, 'categorie_classement' => 15, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, )
	);

	
	public static function getMapBuilder()
	{
		return BasePeer::getMapBuilder('lib.model.map.FindossierMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = FindossierPeer::getTableMap();
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
		return str_replace(FindossierPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(FindossierPeer::ID);

		$criteria->addSelectColumn(FindossierPeer::DOSSIER_ID);

		$criteria->addSelectColumn(FindossierPeer::TYPE_PARC);

		$criteria->addSelectColumn(FindossierPeer::TYPE_PROPRIETAIRE_BAILLEUR);

		$criteria->addSelectColumn(FindossierPeer::NOM_PROPRIETAIRE_BAILLEUR);

		$criteria->addSelectColumn(FindossierPeer::TYPE_CONDITION_ACCES);

		$criteria->addSelectColumn(FindossierPeer::NOM_CONDITION_ACCES);

		$criteria->addSelectColumn(FindossierPeer::VILLE_LOGEMENT);

		$criteria->addSelectColumn(FindossierPeer::DEPARTEMENT_LOGEMENT);

		$criteria->addSelectColumn(FindossierPeer::TYPE_LOGEMENT);

		$criteria->addSelectColumn(FindossierPeer::SUPERFICIE_LOGEMENT);

		$criteria->addSelectColumn(FindossierPeer::LOYER);

		$criteria->addSelectColumn(FindossierPeer::EDF_GDF);

		$criteria->addSelectColumn(FindossierPeer::CHAUFFAGE);

		$criteria->addSelectColumn(FindossierPeer::DIFFICULTES_RENCONTREES);

		$criteria->addSelectColumn(FindossierPeer::CATEGORIE_CLASSEMENT);

	}

	const COUNT = 'COUNT(finDossier.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT finDossier.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(FindossierPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(FindossierPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = FindossierPeer::doSelectRS($criteria, $con);
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
		$objects = FindossierPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return FindossierPeer::populateObjects(FindossierPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			FindossierPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = FindossierPeer::getOMClass();
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
			$criteria->addSelectColumn(FindossierPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(FindossierPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(FindossierPeer::DOSSIER_ID, DossierPeer::ID);

		$rs = FindossierPeer::doSelectRS($criteria, $con);
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

		FindossierPeer::addSelectColumns($c);
		$startcol = (FindossierPeer::NUM_COLUMNS - FindossierPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		DossierPeer::addSelectColumns($c);

		$c->addJoin(FindossierPeer::DOSSIER_ID, DossierPeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = FindossierPeer::getOMClass();

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
										$temp_obj2->addFindossier($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initFindossiers();
				$obj2->addFindossier($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doCountJoinAll(Criteria $criteria, $distinct = false, $con = null)
	{
		$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(FindossierPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(FindossierPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(FindossierPeer::DOSSIER_ID, DossierPeer::ID);

		$rs = FindossierPeer::doSelectRS($criteria, $con);
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

		FindossierPeer::addSelectColumns($c);
		$startcol2 = (FindossierPeer::NUM_COLUMNS - FindossierPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		DossierPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + DossierPeer::NUM_COLUMNS;

		$c->addJoin(FindossierPeer::DOSSIER_ID, DossierPeer::ID);

		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = FindossierPeer::getOMClass();


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
					$temp_obj2->addFindossier($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj2->initFindossiers();
				$obj2->addFindossier($obj1);
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
		return FindossierPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(FindossierPeer::ID); 

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
			$comparison = $criteria->getComparison(FindossierPeer::ID);
			$selectCriteria->add(FindossierPeer::ID, $criteria->remove(FindossierPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(FindossierPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(FindossierPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof Findossier) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(FindossierPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(Findossier $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(FindossierPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(FindossierPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(FindossierPeer::DATABASE_NAME, FindossierPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = FindossierPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(FindossierPeer::DATABASE_NAME);

		$criteria->add(FindossierPeer::ID, $pk);


		$v = FindossierPeer::doSelect($criteria, $con);

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
			$criteria->add(FindossierPeer::ID, $pks, Criteria::IN);
			$objs = FindossierPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseFindossierPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			Propel::registerMapBuilder('lib.model.map.FindossierMapBuilder');
}
