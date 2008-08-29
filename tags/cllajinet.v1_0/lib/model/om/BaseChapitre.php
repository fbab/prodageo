<?php


abstract class BaseChapitre extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $anneecreation;


	
	protected $anneesupression;


	
	protected $titrechapitre;


	
	protected $chapitreparent;

	
	protected $collListerequetess;

	
	protected $lastListerequetesCriteria = null;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getId()
	{

		return $this->id;
	}

	
	public function getAnneecreation()
	{

		return $this->anneecreation;
	}

	
	public function getAnneesupression()
	{

		return $this->anneesupression;
	}

	
	public function getTitrechapitre()
	{

		return $this->titrechapitre;
	}

	
	public function getChapitreparent()
	{

		return $this->chapitreparent;
	}

	
	public function setId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = ChapitrePeer::ID;
		}

	} 
	
	public function setAnneecreation($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->anneecreation !== $v) {
			$this->anneecreation = $v;
			$this->modifiedColumns[] = ChapitrePeer::ANNEECREATION;
		}

	} 
	
	public function setAnneesupression($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->anneesupression !== $v) {
			$this->anneesupression = $v;
			$this->modifiedColumns[] = ChapitrePeer::ANNEESUPRESSION;
		}

	} 
	
	public function setTitrechapitre($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->titrechapitre !== $v) {
			$this->titrechapitre = $v;
			$this->modifiedColumns[] = ChapitrePeer::TITRECHAPITRE;
		}

	} 
	
	public function setChapitreparent($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->chapitreparent !== $v) {
			$this->chapitreparent = $v;
			$this->modifiedColumns[] = ChapitrePeer::CHAPITREPARENT;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->anneecreation = $rs->getInt($startcol + 1);

			$this->anneesupression = $rs->getInt($startcol + 2);

			$this->titrechapitre = $rs->getString($startcol + 3);

			$this->chapitreparent = $rs->getString($startcol + 4);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 5; 
		} catch (Exception $e) {
			throw new PropelException("Error populating Chapitre object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(ChapitrePeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			ChapitrePeer::doDelete($this, $con);
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
			$con = Propel::getConnection(ChapitrePeer::DATABASE_NAME);
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
					$pk = ChapitrePeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += ChapitrePeer::doUpdate($this, $con);
				}
				$this->resetModified(); 			}

			if ($this->collListerequetess !== null) {
				foreach($this->collListerequetess as $referrerFK) {
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


			if (($retval = ChapitrePeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collListerequetess !== null) {
					foreach($this->collListerequetess as $referrerFK) {
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
		$pos = ChapitrePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getAnneecreation();
				break;
			case 2:
				return $this->getAnneesupression();
				break;
			case 3:
				return $this->getTitrechapitre();
				break;
			case 4:
				return $this->getChapitreparent();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = ChapitrePeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getAnneecreation(),
			$keys[2] => $this->getAnneesupression(),
			$keys[3] => $this->getTitrechapitre(),
			$keys[4] => $this->getChapitreparent(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = ChapitrePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setAnneecreation($value);
				break;
			case 2:
				$this->setAnneesupression($value);
				break;
			case 3:
				$this->setTitrechapitre($value);
				break;
			case 4:
				$this->setChapitreparent($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = ChapitrePeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setAnneecreation($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setAnneesupression($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setTitrechapitre($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setChapitreparent($arr[$keys[4]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(ChapitrePeer::DATABASE_NAME);

		if ($this->isColumnModified(ChapitrePeer::ID)) $criteria->add(ChapitrePeer::ID, $this->id);
		if ($this->isColumnModified(ChapitrePeer::ANNEECREATION)) $criteria->add(ChapitrePeer::ANNEECREATION, $this->anneecreation);
		if ($this->isColumnModified(ChapitrePeer::ANNEESUPRESSION)) $criteria->add(ChapitrePeer::ANNEESUPRESSION, $this->anneesupression);
		if ($this->isColumnModified(ChapitrePeer::TITRECHAPITRE)) $criteria->add(ChapitrePeer::TITRECHAPITRE, $this->titrechapitre);
		if ($this->isColumnModified(ChapitrePeer::CHAPITREPARENT)) $criteria->add(ChapitrePeer::CHAPITREPARENT, $this->chapitreparent);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(ChapitrePeer::DATABASE_NAME);

		$criteria->add(ChapitrePeer::ID, $this->id);

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

		$copyObj->setAnneecreation($this->anneecreation);

		$copyObj->setAnneesupression($this->anneesupression);

		$copyObj->setTitrechapitre($this->titrechapitre);

		$copyObj->setChapitreparent($this->chapitreparent);


		if ($deepCopy) {
									$copyObj->setNew(false);

			foreach($this->getListerequetess() as $relObj) {
				$copyObj->addListerequetes($relObj->copy($deepCopy));
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
			self::$peer = new ChapitrePeer();
		}
		return self::$peer;
	}

	
	public function initListerequetess()
	{
		if ($this->collListerequetess === null) {
			$this->collListerequetess = array();
		}
	}

	
	public function getListerequetess($criteria = null, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collListerequetess === null) {
			if ($this->isNew()) {
			   $this->collListerequetess = array();
			} else {

				$criteria->add(ListerequetesPeer::CHAPITRE_ID, $this->getId());

				ListerequetesPeer::addSelectColumns($criteria);
				$this->collListerequetess = ListerequetesPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(ListerequetesPeer::CHAPITRE_ID, $this->getId());

				ListerequetesPeer::addSelectColumns($criteria);
				if (!isset($this->lastListerequetesCriteria) || !$this->lastListerequetesCriteria->equals($criteria)) {
					$this->collListerequetess = ListerequetesPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastListerequetesCriteria = $criteria;
		return $this->collListerequetess;
	}

	
	public function countListerequetess($criteria = null, $distinct = false, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(ListerequetesPeer::CHAPITRE_ID, $this->getId());

		return ListerequetesPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addListerequetes(Listerequetes $l)
	{
		$this->collListerequetess[] = $l;
		$l->setChapitre($this);
	}

} 