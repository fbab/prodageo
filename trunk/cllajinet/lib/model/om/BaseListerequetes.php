<?php


abstract class BaseListerequetes extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $listrequetes;


	
	protected $titrerequetes;


	
	protected $ordrerequetes;


	
	protected $chapitre_id;

	
	protected $aChapitre;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getId()
	{

		return $this->id;
	}

	
	public function getListrequetes()
	{

		return $this->listrequetes;
	}

	
	public function getTitrerequetes()
	{

		return $this->titrerequetes;
	}

	
	public function getOrdrerequetes()
	{

		return $this->ordrerequetes;
	}

	
	public function getChapitreId()
	{

		return $this->chapitre_id;
	}

	
	public function setId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = ListerequetesPeer::ID;
		}

	} 
	
	public function setListrequetes($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->listrequetes !== $v) {
			$this->listrequetes = $v;
			$this->modifiedColumns[] = ListerequetesPeer::LISTREQUETES;
		}

	} 
	
	public function setTitrerequetes($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->titrerequetes !== $v) {
			$this->titrerequetes = $v;
			$this->modifiedColumns[] = ListerequetesPeer::TITREREQUETES;
		}

	} 
	
	public function setOrdrerequetes($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->ordrerequetes !== $v) {
			$this->ordrerequetes = $v;
			$this->modifiedColumns[] = ListerequetesPeer::ORDREREQUETES;
		}

	} 
	
	public function setChapitreId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->chapitre_id !== $v) {
			$this->chapitre_id = $v;
			$this->modifiedColumns[] = ListerequetesPeer::CHAPITRE_ID;
		}

		if ($this->aChapitre !== null && $this->aChapitre->getId() !== $v) {
			$this->aChapitre = null;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->listrequetes = $rs->getString($startcol + 1);

			$this->titrerequetes = $rs->getString($startcol + 2);

			$this->ordrerequetes = $rs->getInt($startcol + 3);

			$this->chapitre_id = $rs->getInt($startcol + 4);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 5; 
		} catch (Exception $e) {
			throw new PropelException("Error populating Listerequetes object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(ListerequetesPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			ListerequetesPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(ListerequetesPeer::DATABASE_NAME);
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


												
			if ($this->aChapitre !== null) {
				if ($this->aChapitre->isModified()) {
					$affectedRows += $this->aChapitre->save($con);
				}
				$this->setChapitre($this->aChapitre);
			}


						if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = ListerequetesPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += ListerequetesPeer::doUpdate($this, $con);
				}
				$this->resetModified(); 			}

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


												
			if ($this->aChapitre !== null) {
				if (!$this->aChapitre->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aChapitre->getValidationFailures());
				}
			}


			if (($retval = ListerequetesPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = ListerequetesPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getListrequetes();
				break;
			case 2:
				return $this->getTitrerequetes();
				break;
			case 3:
				return $this->getOrdrerequetes();
				break;
			case 4:
				return $this->getChapitreId();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = ListerequetesPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getListrequetes(),
			$keys[2] => $this->getTitrerequetes(),
			$keys[3] => $this->getOrdrerequetes(),
			$keys[4] => $this->getChapitreId(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = ListerequetesPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setListrequetes($value);
				break;
			case 2:
				$this->setTitrerequetes($value);
				break;
			case 3:
				$this->setOrdrerequetes($value);
				break;
			case 4:
				$this->setChapitreId($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = ListerequetesPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setListrequetes($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setTitrerequetes($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setOrdrerequetes($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setChapitreId($arr[$keys[4]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(ListerequetesPeer::DATABASE_NAME);

		if ($this->isColumnModified(ListerequetesPeer::ID)) $criteria->add(ListerequetesPeer::ID, $this->id);
		if ($this->isColumnModified(ListerequetesPeer::LISTREQUETES)) $criteria->add(ListerequetesPeer::LISTREQUETES, $this->listrequetes);
		if ($this->isColumnModified(ListerequetesPeer::TITREREQUETES)) $criteria->add(ListerequetesPeer::TITREREQUETES, $this->titrerequetes);
		if ($this->isColumnModified(ListerequetesPeer::ORDREREQUETES)) $criteria->add(ListerequetesPeer::ORDREREQUETES, $this->ordrerequetes);
		if ($this->isColumnModified(ListerequetesPeer::CHAPITRE_ID)) $criteria->add(ListerequetesPeer::CHAPITRE_ID, $this->chapitre_id);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(ListerequetesPeer::DATABASE_NAME);

		$criteria->add(ListerequetesPeer::ID, $this->id);

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

		$copyObj->setListrequetes($this->listrequetes);

		$copyObj->setTitrerequetes($this->titrerequetes);

		$copyObj->setOrdrerequetes($this->ordrerequetes);

		$copyObj->setChapitreId($this->chapitre_id);


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
			self::$peer = new ListerequetesPeer();
		}
		return self::$peer;
	}

	
	public function setChapitre($v)
	{


		if ($v === null) {
			$this->setChapitreId(NULL);
		} else {
			$this->setChapitreId($v->getId());
		}


		$this->aChapitre = $v;
	}


	
	public function getChapitre($con = null)
	{
		if ($this->aChapitre === null && ($this->chapitre_id !== null)) {
						$this->aChapitre = ChapitrePeer::retrieveByPK($this->chapitre_id, $con);

			
		}
		return $this->aChapitre;
	}

} 