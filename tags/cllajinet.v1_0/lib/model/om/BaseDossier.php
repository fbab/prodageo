<?php


abstract class BaseDossier extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $etat;


	
	protected $date_ouverture_dossier;


	
	protected $date_cloture_dossier;


	
	protected $type_dossier;

	
	protected $collPersonnes;

	
	protected $lastPersonneCriteria = null;

	
	protected $collFindossiers;

	
	protected $lastFindossierCriteria = null;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getId()
	{

		return $this->id;
	}

	
	public function getEtat()
	{

		return $this->etat;
	}

	
	public function getDateOuvertureDossier($format = 'Y-m-d')
	{

		if ($this->date_ouverture_dossier === null || $this->date_ouverture_dossier === '') {
			return null;
		} elseif (!is_int($this->date_ouverture_dossier)) {
						$ts = strtotime($this->date_ouverture_dossier);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [date_ouverture_dossier] as date/time value: " . var_export($this->date_ouverture_dossier, true));
			}
		} else {
			$ts = $this->date_ouverture_dossier;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getDateClotureDossier($format = 'Y-m-d')
	{

		if ($this->date_cloture_dossier === null || $this->date_cloture_dossier === '') {
			return null;
		} elseif (!is_int($this->date_cloture_dossier)) {
						$ts = strtotime($this->date_cloture_dossier);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [date_cloture_dossier] as date/time value: " . var_export($this->date_cloture_dossier, true));
			}
		} else {
			$ts = $this->date_cloture_dossier;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getTypeDossier()
	{

		return $this->type_dossier;
	}

	
	public function setId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = DossierPeer::ID;
		}

	} 
	
	public function setEtat($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->etat !== $v) {
			$this->etat = $v;
			$this->modifiedColumns[] = DossierPeer::ETAT;
		}

	} 
	
	public function setDateOuvertureDossier($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [date_ouverture_dossier] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->date_ouverture_dossier !== $ts) {
			$this->date_ouverture_dossier = $ts;
			$this->modifiedColumns[] = DossierPeer::DATE_OUVERTURE_DOSSIER;
		}

	} 
	
	public function setDateClotureDossier($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [date_cloture_dossier] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->date_cloture_dossier !== $ts) {
			$this->date_cloture_dossier = $ts;
			$this->modifiedColumns[] = DossierPeer::DATE_CLOTURE_DOSSIER;
		}

	} 
	
	public function setTypeDossier($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->type_dossier !== $v) {
			$this->type_dossier = $v;
			$this->modifiedColumns[] = DossierPeer::TYPE_DOSSIER;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->etat = $rs->getString($startcol + 1);

			$this->date_ouverture_dossier = $rs->getDate($startcol + 2, null);

			$this->date_cloture_dossier = $rs->getDate($startcol + 3, null);

			$this->type_dossier = $rs->getString($startcol + 4);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 5; 
		} catch (Exception $e) {
			throw new PropelException("Error populating Dossier object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(DossierPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			DossierPeer::doDelete($this, $con);
			$this->setDeleted(true);
			$con->commit();
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	public function save($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(DossierPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			$affectedRows = $this->doSave($con);
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	protected function doSave($con)
	{
		$affectedRows = 0; 		if (!$this->alreadyInSave) {
			$this->alreadyInSave = true;


						if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = DossierPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += DossierPeer::doUpdate($this, $con);
				}
				$this->resetModified(); 			}

			if ($this->collPersonnes !== null) {
				foreach($this->collPersonnes as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collFindossiers !== null) {
				foreach($this->collFindossiers as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			$this->alreadyInSave = false;
		}
		return $affectedRows;
	} 
	
	protected $validationFailures = array();

	
	public function getValidationFailures()
	{
		return $this->validationFailures;
	}

	
	public function validate($columns = null)
	{
		$res = $this->doValidate($columns);
		if ($res === true) {
			$this->validationFailures = array();
			return true;
		} else {
			$this->validationFailures = $res;
			return false;
		}
	}

	
	protected function doValidate($columns = null)
	{
		if (!$this->alreadyInValidation) {
			$this->alreadyInValidation = true;
			$retval = null;

			$failureMap = array();


			if (($retval = DossierPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collPersonnes !== null) {
					foreach($this->collPersonnes as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collFindossiers !== null) {
					foreach($this->collFindossiers as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}


			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = DossierPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getEtat();
				break;
			case 2:
				return $this->getDateOuvertureDossier();
				break;
			case 3:
				return $this->getDateClotureDossier();
				break;
			case 4:
				return $this->getTypeDossier();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = DossierPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getEtat(),
			$keys[2] => $this->getDateOuvertureDossier(),
			$keys[3] => $this->getDateClotureDossier(),
			$keys[4] => $this->getTypeDossier(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = DossierPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setEtat($value);
				break;
			case 2:
				$this->setDateOuvertureDossier($value);
				break;
			case 3:
				$this->setDateClotureDossier($value);
				break;
			case 4:
				$this->setTypeDossier($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = DossierPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setEtat($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setDateOuvertureDossier($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setDateClotureDossier($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setTypeDossier($arr[$keys[4]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(DossierPeer::DATABASE_NAME);

		if ($this->isColumnModified(DossierPeer::ID)) $criteria->add(DossierPeer::ID, $this->id);
		if ($this->isColumnModified(DossierPeer::ETAT)) $criteria->add(DossierPeer::ETAT, $this->etat);
		if ($this->isColumnModified(DossierPeer::DATE_OUVERTURE_DOSSIER)) $criteria->add(DossierPeer::DATE_OUVERTURE_DOSSIER, $this->date_ouverture_dossier);
		if ($this->isColumnModified(DossierPeer::DATE_CLOTURE_DOSSIER)) $criteria->add(DossierPeer::DATE_CLOTURE_DOSSIER, $this->date_cloture_dossier);
		if ($this->isColumnModified(DossierPeer::TYPE_DOSSIER)) $criteria->add(DossierPeer::TYPE_DOSSIER, $this->type_dossier);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(DossierPeer::DATABASE_NAME);

		$criteria->add(DossierPeer::ID, $this->id);

		return $criteria;
	}

	
	public function getPrimaryKey()
	{
		return $this->getId();
	}

	
	public function setPrimaryKey($key)
	{
		$this->setId($key);
	}

	
	public function copyInto($copyObj, $deepCopy = false)
	{

		$copyObj->setEtat($this->etat);

		$copyObj->setDateOuvertureDossier($this->date_ouverture_dossier);

		$copyObj->setDateClotureDossier($this->date_cloture_dossier);

		$copyObj->setTypeDossier($this->type_dossier);


		if ($deepCopy) {
									$copyObj->setNew(false);

			foreach($this->getPersonnes() as $relObj) {
				$copyObj->addPersonne($relObj->copy($deepCopy));
			}

			foreach($this->getFindossiers() as $relObj) {
				$copyObj->addFindossier($relObj->copy($deepCopy));
			}

		} 

		$copyObj->setNew(true);

		$copyObj->setId(NULL); 
	}

	
	public function copy($deepCopy = false)
	{
				$clazz = get_class($this);
		$copyObj = new $clazz();
		$this->copyInto($copyObj, $deepCopy);
		return $copyObj;
	}

	
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new DossierPeer();
		}
		return self::$peer;
	}

	
	public function initPersonnes()
	{
		if ($this->collPersonnes === null) {
			$this->collPersonnes = array();
		}
	}

	
	public function getPersonnes($criteria = null, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collPersonnes === null) {
			if ($this->isNew()) {
			   $this->collPersonnes = array();
			} else {

				$criteria->add(PersonnePeer::DOSSIER_ID, $this->getId());

				PersonnePeer::addSelectColumns($criteria);
				$this->collPersonnes = PersonnePeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(PersonnePeer::DOSSIER_ID, $this->getId());

				PersonnePeer::addSelectColumns($criteria);
				if (!isset($this->lastPersonneCriteria) || !$this->lastPersonneCriteria->equals($criteria)) {
					$this->collPersonnes = PersonnePeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastPersonneCriteria = $criteria;
		return $this->collPersonnes;
	}

	
	public function countPersonnes($criteria = null, $distinct = false, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(PersonnePeer::DOSSIER_ID, $this->getId());

		return PersonnePeer::doCount($criteria, $distinct, $con);
	}

	
	public function addPersonne(Personne $l)
	{
		$this->collPersonnes[] = $l;
		$l->setDossier($this);
	}

	
	public function initFindossiers()
	{
		if ($this->collFindossiers === null) {
			$this->collFindossiers = array();
		}
	}

	
	public function getFindossiers($criteria = null, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collFindossiers === null) {
			if ($this->isNew()) {
			   $this->collFindossiers = array();
			} else {

				$criteria->add(FindossierPeer::DOSSIER_ID, $this->getId());

				FindossierPeer::addSelectColumns($criteria);
				$this->collFindossiers = FindossierPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(FindossierPeer::DOSSIER_ID, $this->getId());

				FindossierPeer::addSelectColumns($criteria);
				if (!isset($this->lastFindossierCriteria) || !$this->lastFindossierCriteria->equals($criteria)) {
					$this->collFindossiers = FindossierPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastFindossierCriteria = $criteria;
		return $this->collFindossiers;
	}

	
	public function countFindossiers($criteria = null, $distinct = false, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(FindossierPeer::DOSSIER_ID, $this->getId());

		return FindossierPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addFindossier(Findossier $l)
	{
		$this->collFindossiers[] = $l;
		$l->setDossier($this);
	}

} 