<?php


abstract class BaseStattableau extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $statistiques_id;


	
	protected $nomstat;


	
	protected $valeaursid;


	
	protected $valeurs;

	
	protected $aStatistiques;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getId()
	{

		return $this->id;
	}

	
	public function getStatistiquesId()
	{

		return $this->statistiques_id;
	}

	
	public function getNomstat()
	{

		return $this->nomstat;
	}

	
	public function getValeaursid()
	{

		return $this->valeaursid;
	}

	
	public function getValeurs()
	{

		return $this->valeurs;
	}

	
	public function setId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = StattableauPeer::ID;
		}

	} 
	
	public function setStatistiquesId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->statistiques_id !== $v) {
			$this->statistiques_id = $v;
			$this->modifiedColumns[] = StattableauPeer::STATISTIQUES_ID;
		}

		if ($this->aStatistiques !== null && $this->aStatistiques->getId() !== $v) {
			$this->aStatistiques = null;
		}

	} 
	
	public function setNomstat($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->nomstat !== $v) {
			$this->nomstat = $v;
			$this->modifiedColumns[] = StattableauPeer::NOMSTAT;
		}

	} 
	
	public function setValeaursid($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->valeaursid !== $v) {
			$this->valeaursid = $v;
			$this->modifiedColumns[] = StattableauPeer::VALEAURSID;
		}

	} 
	
	public function setValeurs($v)
	{

		if ($this->valeurs !== $v) {
			$this->valeurs = $v;
			$this->modifiedColumns[] = StattableauPeer::VALEURS;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->statistiques_id = $rs->getInt($startcol + 1);

			$this->nomstat = $rs->getString($startcol + 2);

			$this->valeaursid = $rs->getInt($startcol + 3);

			$this->valeurs = $rs->getFloat($startcol + 4);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 5; 
		} catch (Exception $e) {
			throw new PropelException("Error populating Stattableau object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(StattableauPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			StattableauPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(StattableauPeer::DATABASE_NAME);
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


												
			if ($this->aStatistiques !== null) {
				if ($this->aStatistiques->isModified()) {
					$affectedRows += $this->aStatistiques->save($con);
				}
				$this->setStatistiques($this->aStatistiques);
			}


						if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = StattableauPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += StattableauPeer::doUpdate($this, $con);
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


												
			if ($this->aStatistiques !== null) {
				if (!$this->aStatistiques->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aStatistiques->getValidationFailures());
				}
			}


			if (($retval = StattableauPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = StattableauPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getStatistiquesId();
				break;
			case 2:
				return $this->getNomstat();
				break;
			case 3:
				return $this->getValeaursid();
				break;
			case 4:
				return $this->getValeurs();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = StattableauPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getStatistiquesId(),
			$keys[2] => $this->getNomstat(),
			$keys[3] => $this->getValeaursid(),
			$keys[4] => $this->getValeurs(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = StattableauPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setStatistiquesId($value);
				break;
			case 2:
				$this->setNomstat($value);
				break;
			case 3:
				$this->setValeaursid($value);
				break;
			case 4:
				$this->setValeurs($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = StattableauPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setStatistiquesId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setNomstat($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setValeaursid($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setValeurs($arr[$keys[4]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(StattableauPeer::DATABASE_NAME);

		if ($this->isColumnModified(StattableauPeer::ID)) $criteria->add(StattableauPeer::ID, $this->id);
		if ($this->isColumnModified(StattableauPeer::STATISTIQUES_ID)) $criteria->add(StattableauPeer::STATISTIQUES_ID, $this->statistiques_id);
		if ($this->isColumnModified(StattableauPeer::NOMSTAT)) $criteria->add(StattableauPeer::NOMSTAT, $this->nomstat);
		if ($this->isColumnModified(StattableauPeer::VALEAURSID)) $criteria->add(StattableauPeer::VALEAURSID, $this->valeaursid);
		if ($this->isColumnModified(StattableauPeer::VALEURS)) $criteria->add(StattableauPeer::VALEURS, $this->valeurs);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(StattableauPeer::DATABASE_NAME);

		$criteria->add(StattableauPeer::ID, $this->id);

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

		$copyObj->setStatistiquesId($this->statistiques_id);

		$copyObj->setNomstat($this->nomstat);

		$copyObj->setValeaursid($this->valeaursid);

		$copyObj->setValeurs($this->valeurs);


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
			self::$peer = new StattableauPeer();
		}
		return self::$peer;
	}

	
	public function setStatistiques($v)
	{


		if ($v === null) {
			$this->setStatistiquesId(NULL);
		} else {
			$this->setStatistiquesId($v->getId());
		}


		$this->aStatistiques = $v;
	}


	
	public function getStatistiques($con = null)
	{
		if ($this->aStatistiques === null && ($this->statistiques_id !== null)) {
						$this->aStatistiques = StatistiquesPeer::retrieveByPK($this->statistiques_id, $con);

			
		}
		return $this->aStatistiques;
	}

} 