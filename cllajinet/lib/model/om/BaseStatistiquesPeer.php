<?php


abstract class BaseStatistiquesPeer {

	
	const DATABASE_NAME = 'propel';

	
	const TABLE_NAME = 'statistiques';

	
	const CLASS_DEFAULT = 'lib.model.Statistiques';

	
	const NUM_COLUMNS = 48;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'statistiques.ID';

	
	const DATESTAT = 'statistiques.DATESTAT';

	
	const NBMENAGESRECU = 'statistiques.NBMENAGESRECU';

	
	const NBADULTESRECU = 'statistiques.NBADULTESRECU';

	
	const NBENFANTSRECU = 'statistiques.NBENFANTSRECU';

	
	const NBLOGES = 'statistiques.NBLOGES';

	
	const NBLOGESADULTES = 'statistiques.NBLOGESADULTES';

	
	const NBLOGESENFANTS = 'statistiques.NBLOGESENFANTS';

	
	const NBLOGESDIRECT = 'statistiques.NBLOGESDIRECT';

	
	const NBLOGESDIRECTADULTES = 'statistiques.NBLOGESDIRECTADULTES';

	
	const NBLOGESDIRECTENFANTS = 'statistiques.NBLOGESDIRECTENFANTS';

	
	const NBLOGESINDIRECT = 'statistiques.NBLOGESINDIRECT';

	
	const NBLOGESINDIRECTADULTES = 'statistiques.NBLOGESINDIRECTADULTES';

	
	const NBLOGESINDIRECTENFANTS = 'statistiques.NBLOGESINDIRECTENFANTS';

	
	const NBALTSOUSLOC = 'statistiques.NBALTSOUSLOC';

	
	const NBALTSOUSLOCADULTES = 'statistiques.NBALTSOUSLOCADULTES';

	
	const NBALTSOUSLOCENFANTS = 'statistiques.NBALTSOUSLOCENFANTS';

	
	const NBENCOURS = 'statistiques.NBENCOURS';

	
	const NBENCOURSADULTES = 'statistiques.NBENCOURSADULTES';

	
	const NBENCOURSENFANTS = 'statistiques.NBENCOURSENFANTS';

	
	const NBABANDON = 'statistiques.NBABANDON';

	
	const NBABANDONADULTES = 'statistiques.NBABANDONADULTES';

	
	const NBABANDONENFANTS = 'statistiques.NBABANDONENFANTS';

	
	const SEXE = 'statistiques.SEXE';

	
	const TRANCHEAGE = 'statistiques.TRANCHEAGE';

	
	const NATIONALITE = 'statistiques.NATIONALITE';

	
	const SITUATIONFAMILIALE = 'statistiques.SITUATIONFAMILIALE';

	
	const ORIGINEDEMANDE = 'statistiques.ORIGINEDEMANDE';

	
	const VILLERESIDENCE = 'statistiques.VILLERESIDENCE';

	
	const MODEHEBERGEMENT = 'statistiques.MODEHEBERGEMENT';

	
	const LIEUTRAVAIL = 'statistiques.LIEUTRAVAIL';

	
	const TYPECONTRAT = 'statistiques.TYPECONTRAT';

	
	const REVENUS = 'statistiques.REVENUS';

	
	const SEXELOGES = 'statistiques.SEXELOGES';

	
	const TRANCHEAGELOGES = 'statistiques.TRANCHEAGELOGES';

	
	const NATIONALITELOGES = 'statistiques.NATIONALITELOGES';

	
	const SITUATIONFAMILIALELOGES = 'statistiques.SITUATIONFAMILIALELOGES';

	
	const ORIGINEDEMANDELOGES = 'statistiques.ORIGINEDEMANDELOGES';

	
	const VILLERESIDENCELOGES = 'statistiques.VILLERESIDENCELOGES';

	
	const MODEHEBERGEMENTLOGES = 'statistiques.MODEHEBERGEMENTLOGES';

	
	const LIEUTRAVAILLOGES = 'statistiques.LIEUTRAVAILLOGES';

	
	const TYPECONTRATLOGES = 'statistiques.TYPECONTRATLOGES';

	
	const REVENUSLOGES = 'statistiques.REVENUSLOGES';

	
	const TYPELOGEMENTTROUVELOGES = 'statistiques.TYPELOGEMENTTROUVELOGES';

	
	const TYPEPROPRIETAIRELOGES = 'statistiques.TYPEPROPRIETAIRELOGES';

	
	const VILLELOGEMENTTROUVELOGES = 'statistiques.VILLELOGEMENTTROUVELOGES';

	
	const NBRECU = 'statistiques.NBRECU';

	
	const NBABANDONS = 'statistiques.NBABANDONS';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'Datestat', 'Nbmenagesrecu', 'Nbadultesrecu', 'Nbenfantsrecu', 'Nbloges', 'Nblogesadultes', 'Nblogesenfants', 'Nblogesdirect', 'Nblogesdirectadultes', 'Nblogesdirectenfants', 'Nblogesindirect', 'Nblogesindirectadultes', 'Nblogesindirectenfants', 'Nbaltsousloc', 'Nbaltsouslocadultes', 'Nbaltsouslocenfants', 'Nbencours', 'Nbencoursadultes', 'Nbencoursenfants', 'Nbabandon', 'Nbabandonadultes', 'Nbabandonenfants', 'Sexe', 'Trancheage', 'Nationalite', 'Situationfamiliale', 'Originedemande', 'Villeresidence', 'Modehebergement', 'Lieutravail', 'Typecontrat', 'Revenus', 'Sexeloges', 'Trancheageloges', 'Nationaliteloges', 'Situationfamilialeloges', 'Originedemandeloges', 'Villeresidenceloges', 'Modehebergementloges', 'Lieutravailloges', 'Typecontratloges', 'Revenusloges', 'Typelogementtrouveloges', 'Typeproprietaireloges', 'Villelogementtrouveloges', 'Nbrecu', 'Nbabandons', ),
		BasePeer::TYPE_COLNAME => array (StatistiquesPeer::ID, StatistiquesPeer::DATESTAT, StatistiquesPeer::NBMENAGESRECU, StatistiquesPeer::NBADULTESRECU, StatistiquesPeer::NBENFANTSRECU, StatistiquesPeer::NBLOGES, StatistiquesPeer::NBLOGESADULTES, StatistiquesPeer::NBLOGESENFANTS, StatistiquesPeer::NBLOGESDIRECT, StatistiquesPeer::NBLOGESDIRECTADULTES, StatistiquesPeer::NBLOGESDIRECTENFANTS, StatistiquesPeer::NBLOGESINDIRECT, StatistiquesPeer::NBLOGESINDIRECTADULTES, StatistiquesPeer::NBLOGESINDIRECTENFANTS, StatistiquesPeer::NBALTSOUSLOC, StatistiquesPeer::NBALTSOUSLOCADULTES, StatistiquesPeer::NBALTSOUSLOCENFANTS, StatistiquesPeer::NBENCOURS, StatistiquesPeer::NBENCOURSADULTES, StatistiquesPeer::NBENCOURSENFANTS, StatistiquesPeer::NBABANDON, StatistiquesPeer::NBABANDONADULTES, StatistiquesPeer::NBABANDONENFANTS, StatistiquesPeer::SEXE, StatistiquesPeer::TRANCHEAGE, StatistiquesPeer::NATIONALITE, StatistiquesPeer::SITUATIONFAMILIALE, StatistiquesPeer::ORIGINEDEMANDE, StatistiquesPeer::VILLERESIDENCE, StatistiquesPeer::MODEHEBERGEMENT, StatistiquesPeer::LIEUTRAVAIL, StatistiquesPeer::TYPECONTRAT, StatistiquesPeer::REVENUS, StatistiquesPeer::SEXELOGES, StatistiquesPeer::TRANCHEAGELOGES, StatistiquesPeer::NATIONALITELOGES, StatistiquesPeer::SITUATIONFAMILIALELOGES, StatistiquesPeer::ORIGINEDEMANDELOGES, StatistiquesPeer::VILLERESIDENCELOGES, StatistiquesPeer::MODEHEBERGEMENTLOGES, StatistiquesPeer::LIEUTRAVAILLOGES, StatistiquesPeer::TYPECONTRATLOGES, StatistiquesPeer::REVENUSLOGES, StatistiquesPeer::TYPELOGEMENTTROUVELOGES, StatistiquesPeer::TYPEPROPRIETAIRELOGES, StatistiquesPeer::VILLELOGEMENTTROUVELOGES, StatistiquesPeer::NBRECU, StatistiquesPeer::NBABANDONS, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'datestat', 'nbmenagesrecu', 'nbadultesrecu', 'nbenfantsrecu', 'nbloges', 'nblogesadultes', 'nblogesenfants', 'nblogesdirect', 'nblogesdirectadultes', 'nblogesdirectenfants', 'nblogesindirect', 'nblogesindirectadultes', 'nblogesindirectenfants', 'nbaltsousloc', 'nbaltsouslocadultes', 'nbaltsouslocenfants', 'nbencours', 'nbencoursadultes', 'nbencoursenfants', 'nbabandon', 'nbabandonadultes', 'nbabandonenfants', 'sexe', 'trancheage', 'nationalite', 'situationfamiliale', 'originedemande', 'villeresidence', 'modehebergement', 'lieutravail', 'typecontrat', 'revenus', 'sexeloges', 'trancheageloges', 'nationaliteloges', 'situationfamilialeloges', 'originedemandeloges', 'villeresidenceloges', 'modehebergementloges', 'lieutravailloges', 'typecontratloges', 'revenusloges', 'typelogementtrouveloges', 'typeproprietaireloges', 'villelogementtrouveloges', 'nbrecu', 'nbabandons', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Datestat' => 1, 'Nbmenagesrecu' => 2, 'Nbadultesrecu' => 3, 'Nbenfantsrecu' => 4, 'Nbloges' => 5, 'Nblogesadultes' => 6, 'Nblogesenfants' => 7, 'Nblogesdirect' => 8, 'Nblogesdirectadultes' => 9, 'Nblogesdirectenfants' => 10, 'Nblogesindirect' => 11, 'Nblogesindirectadultes' => 12, 'Nblogesindirectenfants' => 13, 'Nbaltsousloc' => 14, 'Nbaltsouslocadultes' => 15, 'Nbaltsouslocenfants' => 16, 'Nbencours' => 17, 'Nbencoursadultes' => 18, 'Nbencoursenfants' => 19, 'Nbabandon' => 20, 'Nbabandonadultes' => 21, 'Nbabandonenfants' => 22, 'Sexe' => 23, 'Trancheage' => 24, 'Nationalite' => 25, 'Situationfamiliale' => 26, 'Originedemande' => 27, 'Villeresidence' => 28, 'Modehebergement' => 29, 'Lieutravail' => 30, 'Typecontrat' => 31, 'Revenus' => 32, 'Sexeloges' => 33, 'Trancheageloges' => 34, 'Nationaliteloges' => 35, 'Situationfamilialeloges' => 36, 'Originedemandeloges' => 37, 'Villeresidenceloges' => 38, 'Modehebergementloges' => 39, 'Lieutravailloges' => 40, 'Typecontratloges' => 41, 'Revenusloges' => 42, 'Typelogementtrouveloges' => 43, 'Typeproprietaireloges' => 44, 'Villelogementtrouveloges' => 45, 'Nbrecu' => 46, 'Nbabandons' => 47, ),
		BasePeer::TYPE_COLNAME => array (StatistiquesPeer::ID => 0, StatistiquesPeer::DATESTAT => 1, StatistiquesPeer::NBMENAGESRECU => 2, StatistiquesPeer::NBADULTESRECU => 3, StatistiquesPeer::NBENFANTSRECU => 4, StatistiquesPeer::NBLOGES => 5, StatistiquesPeer::NBLOGESADULTES => 6, StatistiquesPeer::NBLOGESENFANTS => 7, StatistiquesPeer::NBLOGESDIRECT => 8, StatistiquesPeer::NBLOGESDIRECTADULTES => 9, StatistiquesPeer::NBLOGESDIRECTENFANTS => 10, StatistiquesPeer::NBLOGESINDIRECT => 11, StatistiquesPeer::NBLOGESINDIRECTADULTES => 12, StatistiquesPeer::NBLOGESINDIRECTENFANTS => 13, StatistiquesPeer::NBALTSOUSLOC => 14, StatistiquesPeer::NBALTSOUSLOCADULTES => 15, StatistiquesPeer::NBALTSOUSLOCENFANTS => 16, StatistiquesPeer::NBENCOURS => 17, StatistiquesPeer::NBENCOURSADULTES => 18, StatistiquesPeer::NBENCOURSENFANTS => 19, StatistiquesPeer::NBABANDON => 20, StatistiquesPeer::NBABANDONADULTES => 21, StatistiquesPeer::NBABANDONENFANTS => 22, StatistiquesPeer::SEXE => 23, StatistiquesPeer::TRANCHEAGE => 24, StatistiquesPeer::NATIONALITE => 25, StatistiquesPeer::SITUATIONFAMILIALE => 26, StatistiquesPeer::ORIGINEDEMANDE => 27, StatistiquesPeer::VILLERESIDENCE => 28, StatistiquesPeer::MODEHEBERGEMENT => 29, StatistiquesPeer::LIEUTRAVAIL => 30, StatistiquesPeer::TYPECONTRAT => 31, StatistiquesPeer::REVENUS => 32, StatistiquesPeer::SEXELOGES => 33, StatistiquesPeer::TRANCHEAGELOGES => 34, StatistiquesPeer::NATIONALITELOGES => 35, StatistiquesPeer::SITUATIONFAMILIALELOGES => 36, StatistiquesPeer::ORIGINEDEMANDELOGES => 37, StatistiquesPeer::VILLERESIDENCELOGES => 38, StatistiquesPeer::MODEHEBERGEMENTLOGES => 39, StatistiquesPeer::LIEUTRAVAILLOGES => 40, StatistiquesPeer::TYPECONTRATLOGES => 41, StatistiquesPeer::REVENUSLOGES => 42, StatistiquesPeer::TYPELOGEMENTTROUVELOGES => 43, StatistiquesPeer::TYPEPROPRIETAIRELOGES => 44, StatistiquesPeer::VILLELOGEMENTTROUVELOGES => 45, StatistiquesPeer::NBRECU => 46, StatistiquesPeer::NBABANDONS => 47, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'datestat' => 1, 'nbmenagesrecu' => 2, 'nbadultesrecu' => 3, 'nbenfantsrecu' => 4, 'nbloges' => 5, 'nblogesadultes' => 6, 'nblogesenfants' => 7, 'nblogesdirect' => 8, 'nblogesdirectadultes' => 9, 'nblogesdirectenfants' => 10, 'nblogesindirect' => 11, 'nblogesindirectadultes' => 12, 'nblogesindirectenfants' => 13, 'nbaltsousloc' => 14, 'nbaltsouslocadultes' => 15, 'nbaltsouslocenfants' => 16, 'nbencours' => 17, 'nbencoursadultes' => 18, 'nbencoursenfants' => 19, 'nbabandon' => 20, 'nbabandonadultes' => 21, 'nbabandonenfants' => 22, 'sexe' => 23, 'trancheage' => 24, 'nationalite' => 25, 'situationfamiliale' => 26, 'originedemande' => 27, 'villeresidence' => 28, 'modehebergement' => 29, 'lieutravail' => 30, 'typecontrat' => 31, 'revenus' => 32, 'sexeloges' => 33, 'trancheageloges' => 34, 'nationaliteloges' => 35, 'situationfamilialeloges' => 36, 'originedemandeloges' => 37, 'villeresidenceloges' => 38, 'modehebergementloges' => 39, 'lieutravailloges' => 40, 'typecontratloges' => 41, 'revenusloges' => 42, 'typelogementtrouveloges' => 43, 'typeproprietaireloges' => 44, 'villelogementtrouveloges' => 45, 'nbrecu' => 46, 'nbabandons' => 47, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, )
	);

	
	public static function getMapBuilder()
	{
		return BasePeer::getMapBuilder('lib.model.map.StatistiquesMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = StatistiquesPeer::getTableMap();
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
		return str_replace(StatistiquesPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(StatistiquesPeer::ID);

		$criteria->addSelectColumn(StatistiquesPeer::DATESTAT);

		$criteria->addSelectColumn(StatistiquesPeer::NBMENAGESRECU);

		$criteria->addSelectColumn(StatistiquesPeer::NBADULTESRECU);

		$criteria->addSelectColumn(StatistiquesPeer::NBENFANTSRECU);

		$criteria->addSelectColumn(StatistiquesPeer::NBLOGES);

		$criteria->addSelectColumn(StatistiquesPeer::NBLOGESADULTES);

		$criteria->addSelectColumn(StatistiquesPeer::NBLOGESENFANTS);

		$criteria->addSelectColumn(StatistiquesPeer::NBLOGESDIRECT);

		$criteria->addSelectColumn(StatistiquesPeer::NBLOGESDIRECTADULTES);

		$criteria->addSelectColumn(StatistiquesPeer::NBLOGESDIRECTENFANTS);

		$criteria->addSelectColumn(StatistiquesPeer::NBLOGESINDIRECT);

		$criteria->addSelectColumn(StatistiquesPeer::NBLOGESINDIRECTADULTES);

		$criteria->addSelectColumn(StatistiquesPeer::NBLOGESINDIRECTENFANTS);

		$criteria->addSelectColumn(StatistiquesPeer::NBALTSOUSLOC);

		$criteria->addSelectColumn(StatistiquesPeer::NBALTSOUSLOCADULTES);

		$criteria->addSelectColumn(StatistiquesPeer::NBALTSOUSLOCENFANTS);

		$criteria->addSelectColumn(StatistiquesPeer::NBENCOURS);

		$criteria->addSelectColumn(StatistiquesPeer::NBENCOURSADULTES);

		$criteria->addSelectColumn(StatistiquesPeer::NBENCOURSENFANTS);

		$criteria->addSelectColumn(StatistiquesPeer::NBABANDON);

		$criteria->addSelectColumn(StatistiquesPeer::NBABANDONADULTES);

		$criteria->addSelectColumn(StatistiquesPeer::NBABANDONENFANTS);

		$criteria->addSelectColumn(StatistiquesPeer::SEXE);

		$criteria->addSelectColumn(StatistiquesPeer::TRANCHEAGE);

		$criteria->addSelectColumn(StatistiquesPeer::NATIONALITE);

		$criteria->addSelectColumn(StatistiquesPeer::SITUATIONFAMILIALE);

		$criteria->addSelectColumn(StatistiquesPeer::ORIGINEDEMANDE);

		$criteria->addSelectColumn(StatistiquesPeer::VILLERESIDENCE);

		$criteria->addSelectColumn(StatistiquesPeer::MODEHEBERGEMENT);

		$criteria->addSelectColumn(StatistiquesPeer::LIEUTRAVAIL);

		$criteria->addSelectColumn(StatistiquesPeer::TYPECONTRAT);

		$criteria->addSelectColumn(StatistiquesPeer::REVENUS);

		$criteria->addSelectColumn(StatistiquesPeer::SEXELOGES);

		$criteria->addSelectColumn(StatistiquesPeer::TRANCHEAGELOGES);

		$criteria->addSelectColumn(StatistiquesPeer::NATIONALITELOGES);

		$criteria->addSelectColumn(StatistiquesPeer::SITUATIONFAMILIALELOGES);

		$criteria->addSelectColumn(StatistiquesPeer::ORIGINEDEMANDELOGES);

		$criteria->addSelectColumn(StatistiquesPeer::VILLERESIDENCELOGES);

		$criteria->addSelectColumn(StatistiquesPeer::MODEHEBERGEMENTLOGES);

		$criteria->addSelectColumn(StatistiquesPeer::LIEUTRAVAILLOGES);

		$criteria->addSelectColumn(StatistiquesPeer::TYPECONTRATLOGES);

		$criteria->addSelectColumn(StatistiquesPeer::REVENUSLOGES);

		$criteria->addSelectColumn(StatistiquesPeer::TYPELOGEMENTTROUVELOGES);

		$criteria->addSelectColumn(StatistiquesPeer::TYPEPROPRIETAIRELOGES);

		$criteria->addSelectColumn(StatistiquesPeer::VILLELOGEMENTTROUVELOGES);

		$criteria->addSelectColumn(StatistiquesPeer::NBRECU);

		$criteria->addSelectColumn(StatistiquesPeer::NBABANDONS);

	}

	const COUNT = 'COUNT(statistiques.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT statistiques.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(StatistiquesPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(StatistiquesPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = StatistiquesPeer::doSelectRS($criteria, $con);
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
		$objects = StatistiquesPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return StatistiquesPeer::populateObjects(StatistiquesPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			StatistiquesPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = StatistiquesPeer::getOMClass();
		$cls = Propel::import($cls);
				while($rs->next()) {
		
			$obj = new $cls();
			$obj->hydrate($rs);
			$results[] = $obj;
			
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
		return StatistiquesPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(StatistiquesPeer::ID); 

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
			$comparison = $criteria->getComparison(StatistiquesPeer::ID);
			$selectCriteria->add(StatistiquesPeer::ID, $criteria->remove(StatistiquesPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(StatistiquesPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(StatistiquesPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof Statistiques) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(StatistiquesPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(Statistiques $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(StatistiquesPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(StatistiquesPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(StatistiquesPeer::DATABASE_NAME, StatistiquesPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = StatistiquesPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(StatistiquesPeer::DATABASE_NAME);

		$criteria->add(StatistiquesPeer::ID, $pk);


		$v = StatistiquesPeer::doSelect($criteria, $con);

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
			$criteria->add(StatistiquesPeer::ID, $pks, Criteria::IN);
			$objs = StatistiquesPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseStatistiquesPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			Propel::registerMapBuilder('lib.model.map.StatistiquesMapBuilder');
}
