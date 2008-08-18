<?php


abstract class BaseFindossier extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $dossier_id;


	
	protected $type_parc;


	
	protected $type_proprietaire_bailleur;


	
	protected $nom_proprietaire_bailleur;


	
	protected $type_condition_acces;


	
	protected $nom_condition_acces;


	
	protected $ville_logement;


	
	protected $departement_logement;


	
	protected $type_logement;


	
	protected $superficie_logement;


	
	protected $loyer;


	
	protected $edf_gdf;


	
	protected $chauffage;


	
	protected $difficultes_rencontrees;


	
	protected $categorie_classement;

	
	protected $aDossier;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;


	public function getId()
	{

		return $this->id;
	}

	
	public function getDossierId()
	{

		return $this->dossier_id;
	}

	
	public function getTypeParc()
	{

		return $this->type_parc;
	}

	
	public function getTypeProprietaireBailleur()
	{

		return $this->type_proprietaire_bailleur;
	}

	
	public function getNomProprietaireBailleur()
	{

		return $this->nom_proprietaire_bailleur;
	}

	
	public function getTypeConditionAcces()
	{

		return $this->type_condition_acces;
	}

	
	public function getNomConditionAcces()
	{

		return $this->nom_condition_acces;
	}

	
	public function getVilleLogement()
	{

		return $this->ville_logement;
	}

	
	public function getDepartementLogement()
	{

		return $this->departement_logement;
	}

	
	public function getTypeLogement()
	{

		return $this->type_logement;
	}

	
	public function getSuperficieLogement()
	{

		return $this->superficie_logement;
	}

	
	public function getLoyer()
	{

		return $this->loyer;
	}

	
	public function getEdfGdf()
	{

		return $this->edf_gdf;
	}

	
	public function getChauffage()
	{

		return $this->chauffage;
	}

	
	public function getDifficultesRencontrees()
	{

		return $this->difficultes_rencontrees;
	}

	
	public function getCategorieClassement()
	{

		return $this->categorie_classement;
	}

	
        // ajout d'une fonction set pour la variable nouvellement créée  :vartypeparc

        public function setVarTypeParc($value)
        {
               return self::$vartypeparc;
        }


	public function setId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = FindossierPeer::ID;
		}

	} 
	
	public function setDossierId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->dossier_id !== $v) {
			$this->dossier_id = $v;
			$this->modifiedColumns[] = FindossierPeer::DOSSIER_ID;
		}

		if ($this->aDossier !== null && $this->aDossier->getId() !== $v) {
			$this->aDossier = null;
		}

	} 
	
	public function setTypeParc($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->type_parc !== $v) {
			$this->type_parc = $v;
			$this->modifiedColumns[] = FindossierPeer::TYPE_PARC;
		}

	} 
	
	public function setTypeProprietaireBailleur($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->type_proprietaire_bailleur !== $v) {
			$this->type_proprietaire_bailleur = $v;
			$this->modifiedColumns[] = FindossierPeer::TYPE_PROPRIETAIRE_BAILLEUR;
		}

	} 
	
	public function setNomProprietaireBailleur($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->nom_proprietaire_bailleur !== $v) {
			$this->nom_proprietaire_bailleur = $v;
			$this->modifiedColumns[] = FindossierPeer::NOM_PROPRIETAIRE_BAILLEUR;
		}

	} 
	
	public function setTypeConditionAcces($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->type_condition_acces !== $v) {
			$this->type_condition_acces = $v;
			$this->modifiedColumns[] = FindossierPeer::TYPE_CONDITION_ACCES;
		}

	} 
	
	public function setNomConditionAcces($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->nom_condition_acces !== $v) {
			$this->nom_condition_acces = $v;
			$this->modifiedColumns[] = FindossierPeer::NOM_CONDITION_ACCES;
		}

	} 
	
	public function setVilleLogement($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->ville_logement !== $v) {
			$this->ville_logement = $v;
			$this->modifiedColumns[] = FindossierPeer::VILLE_LOGEMENT;
		}

	} 
	
	public function setDepartementLogement($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->departement_logement !== $v) {
			$this->departement_logement = $v;
			$this->modifiedColumns[] = FindossierPeer::DEPARTEMENT_LOGEMENT;
		}

	} 
	
	public function setTypeLogement($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->type_logement !== $v) {
			$this->type_logement = $v;
			$this->modifiedColumns[] = FindossierPeer::TYPE_LOGEMENT;
		}

	} 
	
	public function setSuperficieLogement($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->superficie_logement !== $v) {
			$this->superficie_logement = $v;
			$this->modifiedColumns[] = FindossierPeer::SUPERFICIE_LOGEMENT;
		}

	} 
	
	public function setLoyer($v)
	{

		if ($this->loyer !== $v) {
			$this->loyer = $v;
			$this->modifiedColumns[] = FindossierPeer::LOYER;
		}

	} 
	
	public function setEdfGdf($v)
	{

		if ($this->edf_gdf !== $v) {
			$this->edf_gdf = $v;
			$this->modifiedColumns[] = FindossierPeer::EDF_GDF;
		}

	} 
	
	public function setChauffage($v)
	{

		if ($this->chauffage !== $v) {
			$this->chauffage = $v;
			$this->modifiedColumns[] = FindossierPeer::CHAUFFAGE;
		}

	} 
	
	public function setDifficultesRencontrees($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->difficultes_rencontrees !== $v) {
			$this->difficultes_rencontrees = $v;
			$this->modifiedColumns[] = FindossierPeer::DIFFICULTES_RENCONTREES;
		}

	} 
	
	public function setCategorieClassement($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->categorie_classement !== $v) {
			$this->categorie_classement = $v;
			$this->modifiedColumns[] = FindossierPeer::CATEGORIE_CLASSEMENT;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->dossier_id = $rs->getInt($startcol + 1);

			$this->type_parc = $rs->getString($startcol + 2);

			$this->type_proprietaire_bailleur = $rs->getString($startcol + 3);

			$this->nom_proprietaire_bailleur = $rs->getString($startcol + 4);

			$this->type_condition_acces = $rs->getString($startcol + 5);

			$this->nom_condition_acces = $rs->getString($startcol + 6);

			$this->ville_logement = $rs->getString($startcol + 7);

			$this->departement_logement = $rs->getInt($startcol + 8);

			$this->type_logement = $rs->getString($startcol + 9);

			$this->superficie_logement = $rs->getInt($startcol + 10);

			$this->loyer = $rs->getFloat($startcol + 11);

			$this->edf_gdf = $rs->getFloat($startcol + 12);

			$this->chauffage = $rs->getFloat($startcol + 13);

			$this->difficultes_rencontrees = $rs->getString($startcol + 14);

			$this->categorie_classement = $rs->getString($startcol + 15);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 16; 
		} catch (Exception $e) {
			throw new PropelException("Error populating Findossier object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(FindossierPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			FindossierPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(FindossierPeer::DATABASE_NAME);
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


												
			if ($this->aDossier !== null) {
				if ($this->aDossier->isModified()) {
					$affectedRows += $this->aDossier->save($con);
				}
				$this->setDossier($this->aDossier);
			}


						if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = FindossierPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += FindossierPeer::doUpdate($this, $con);
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


												
			if ($this->aDossier !== null) {
				if (!$this->aDossier->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aDossier->getValidationFailures());
				}
			}


			if (($retval = FindossierPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = FindossierPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getDossierId();
				break;
			case 2:
				return $this->getTypeParc();
				break;
			case 3:
				return $this->getTypeProprietaireBailleur();
				break;
			case 4:
				return $this->getNomProprietaireBailleur();
				break;
			case 5:
				return $this->getTypeConditionAcces();
				break;
			case 6:
				return $this->getNomConditionAcces();
				break;
			case 7:
				return $this->getVilleLogement();
				break;
			case 8:
				return $this->getDepartementLogement();
				break;
			case 9:
				return $this->getTypeLogement();
				break;
			case 10:
				return $this->getSuperficieLogement();
				break;
			case 11:
				return $this->getLoyer();
				break;
			case 12:
				return $this->getEdfGdf();
				break;
			case 13:
				return $this->getChauffage();
				break;
			case 14:
				return $this->getDifficultesRencontrees();
				break;
			case 15:
				return $this->getCategorieClassement();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = FindossierPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getDossierId(),
			$keys[2] => $this->getTypeParc(),
			$keys[3] => $this->getTypeProprietaireBailleur(),
			$keys[4] => $this->getNomProprietaireBailleur(),
			$keys[5] => $this->getTypeConditionAcces(),
			$keys[6] => $this->getNomConditionAcces(),
			$keys[7] => $this->getVilleLogement(),
			$keys[8] => $this->getDepartementLogement(),
			$keys[9] => $this->getTypeLogement(),
			$keys[10] => $this->getSuperficieLogement(),
			$keys[11] => $this->getLoyer(),
			$keys[12] => $this->getEdfGdf(),
			$keys[13] => $this->getChauffage(),
			$keys[14] => $this->getDifficultesRencontrees(),
			$keys[15] => $this->getCategorieClassement(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = FindossierPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setDossierId($value);
				break;
			case 2:
				$this->setTypeParc($value);
				break;
			case 3:
				$this->setTypeProprietaireBailleur($value);
				break;
			case 4:
				$this->setNomProprietaireBailleur($value);
				break;
			case 5:
				$this->setTypeConditionAcces($value);
				break;
			case 6:
				$this->setNomConditionAcces($value);
				break;
			case 7:
				$this->setVilleLogement($value);
				break;
			case 8:
				$this->setDepartementLogement($value);
				break;
			case 9:
				$this->setTypeLogement($value);
				break;
			case 10:
				$this->setSuperficieLogement($value);
				break;
			case 11:
				$this->setLoyer($value);
				break;
			case 12:
				$this->setEdfGdf($value);
				break;
			case 13:
				$this->setChauffage($value);
				break;
			case 14:
				$this->setDifficultesRencontrees($value);
				break;
			case 15:
				$this->setCategorieClassement($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = FindossierPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setDossierId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setTypeParc($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setTypeProprietaireBailleur($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setNomProprietaireBailleur($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setTypeConditionAcces($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setNomConditionAcces($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setVilleLogement($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setDepartementLogement($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setTypeLogement($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setSuperficieLogement($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setLoyer($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setEdfGdf($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setChauffage($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setDifficultesRencontrees($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setCategorieClassement($arr[$keys[15]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(FindossierPeer::DATABASE_NAME);

		if ($this->isColumnModified(FindossierPeer::ID)) $criteria->add(FindossierPeer::ID, $this->id);
		if ($this->isColumnModified(FindossierPeer::DOSSIER_ID)) $criteria->add(FindossierPeer::DOSSIER_ID, $this->dossier_id);
		if ($this->isColumnModified(FindossierPeer::TYPE_PARC)) $criteria->add(FindossierPeer::TYPE_PARC, $this->type_parc);
		if ($this->isColumnModified(FindossierPeer::TYPE_PROPRIETAIRE_BAILLEUR)) $criteria->add(FindossierPeer::TYPE_PROPRIETAIRE_BAILLEUR, $this->type_proprietaire_bailleur);
		if ($this->isColumnModified(FindossierPeer::NOM_PROPRIETAIRE_BAILLEUR)) $criteria->add(FindossierPeer::NOM_PROPRIETAIRE_BAILLEUR, $this->nom_proprietaire_bailleur);
		if ($this->isColumnModified(FindossierPeer::TYPE_CONDITION_ACCES)) $criteria->add(FindossierPeer::TYPE_CONDITION_ACCES, $this->type_condition_acces);
		if ($this->isColumnModified(FindossierPeer::NOM_CONDITION_ACCES)) $criteria->add(FindossierPeer::NOM_CONDITION_ACCES, $this->nom_condition_acces);
		if ($this->isColumnModified(FindossierPeer::VILLE_LOGEMENT)) $criteria->add(FindossierPeer::VILLE_LOGEMENT, $this->ville_logement);
		if ($this->isColumnModified(FindossierPeer::DEPARTEMENT_LOGEMENT)) $criteria->add(FindossierPeer::DEPARTEMENT_LOGEMENT, $this->departement_logement);
		if ($this->isColumnModified(FindossierPeer::TYPE_LOGEMENT)) $criteria->add(FindossierPeer::TYPE_LOGEMENT, $this->type_logement);
		if ($this->isColumnModified(FindossierPeer::SUPERFICIE_LOGEMENT)) $criteria->add(FindossierPeer::SUPERFICIE_LOGEMENT, $this->superficie_logement);
		if ($this->isColumnModified(FindossierPeer::LOYER)) $criteria->add(FindossierPeer::LOYER, $this->loyer);
		if ($this->isColumnModified(FindossierPeer::EDF_GDF)) $criteria->add(FindossierPeer::EDF_GDF, $this->edf_gdf);
		if ($this->isColumnModified(FindossierPeer::CHAUFFAGE)) $criteria->add(FindossierPeer::CHAUFFAGE, $this->chauffage);
		if ($this->isColumnModified(FindossierPeer::DIFFICULTES_RENCONTREES)) $criteria->add(FindossierPeer::DIFFICULTES_RENCONTREES, $this->difficultes_rencontrees);
		if ($this->isColumnModified(FindossierPeer::CATEGORIE_CLASSEMENT)) $criteria->add(FindossierPeer::CATEGORIE_CLASSEMENT, $this->categorie_classement);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(FindossierPeer::DATABASE_NAME);

		$criteria->add(FindossierPeer::ID, $this->id);

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

		$copyObj->setDossierId($this->dossier_id);

		$copyObj->setTypeParc($this->type_parc);

		$copyObj->setTypeProprietaireBailleur($this->type_proprietaire_bailleur);

		$copyObj->setNomProprietaireBailleur($this->nom_proprietaire_bailleur);

		$copyObj->setTypeConditionAcces($this->type_condition_acces);

		$copyObj->setNomConditionAcces($this->nom_condition_acces);

		$copyObj->setVilleLogement($this->ville_logement);

		$copyObj->setDepartementLogement($this->departement_logement);

		$copyObj->setTypeLogement($this->type_logement);

		$copyObj->setSuperficieLogement($this->superficie_logement);

		$copyObj->setLoyer($this->loyer);

		$copyObj->setEdfGdf($this->edf_gdf);

		$copyObj->setChauffage($this->chauffage);

		$copyObj->setDifficultesRencontrees($this->difficultes_rencontrees);

		$copyObj->setCategorieClassement($this->categorie_classement);


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
			self::$peer = new FindossierPeer();
		}
		return self::$peer;
	}

	
	public function setDossier($v)
	{


		if ($v === null) {
			$this->setDossierId(NULL);
		} else {
			$this->setDossierId($v->getId());
		}


		$this->aDossier = $v;
	}


	
	public function getDossier($con = null)
	{
		if ($this->aDossier === null && ($this->dossier_id !== null)) {
						$this->aDossier = DossierPeer::retrieveByPK($this->dossier_id, $con);

			
		}
		return $this->aDossier;
	}

} 
