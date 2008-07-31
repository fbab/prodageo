<?php


abstract class BasePersonne extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $dossier_id;


	
	protected $nom;


	
	protected $prenom;


	
	protected $num_telephone;


	
	protected $sexe;


	
	protected $date_naissance;


	
	protected $tranche_age;


	
	protected $statut;


	
	protected $enfants;


	
	protected $nb_enfants;


	
	protected $lieu_naissance;


	
	protected $nationalite;


	
	protected $adresse_actuelle;


	
	protected $ville_actuelle;


	
	protected $type_logement_actuel;


	
	protected $categorie_logement_actuel;


	
	protected $origine_demande;


	
	protected $type_structure;


	
	protected $referent;


	
	protected $loyer_actuel;


	
	protected $profession_actuelle;


	
	protected $employeur_actuel;


	
	protected $ville_employeur_actuel;


	
	protected $dpt_employeur_actuel;


	
	protected $date_embauche;


	
	protected $type_contrat;


	
	protected $tranche_salaire;


	
	protected $salaire_exact;


	
	protected $dettes_credits;


	
	protected $motif_recherche_logement;


	
	protected $observations;

	
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

	
	public function getNom()
	{

		return $this->nom;
	}

	
	public function getPrenom()
	{

		return $this->prenom;
	}

	
	public function getNumTelephone()
	{

		return $this->num_telephone;
	}

	
	public function getSexe()
	{

		return $this->sexe;
	}

	
	public function getDateNaissance($format = 'Y-m-d')
	{

		if ($this->date_naissance === null || $this->date_naissance === '') {
			return null;
		} elseif (!is_int($this->date_naissance)) {
						$ts = strtotime($this->date_naissance);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [date_naissance] as date/time value: " . var_export($this->date_naissance, true));
			}
		} else {
			$ts = $this->date_naissance;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getTrancheAge()
	{

		return $this->tranche_age;
	}

	
	public function getStatut()
	{

		return $this->statut;
	}

	
	public function getEnfants()
	{

		return $this->enfants;
	}

	
	public function getNbEnfants()
	{

		return $this->nb_enfants;
	}

	
	public function getLieuNaissance()
	{

		return $this->lieu_naissance;
	}

	
	public function getNationalite()
	{

		return $this->nationalite;
	}

	
	public function getAdresseActuelle()
	{

		return $this->adresse_actuelle;
	}

	
	public function getVilleActuelle()
	{

		return $this->ville_actuelle;
	}

	
	public function getTypeLogementActuel()
	{

		return $this->type_logement_actuel;
	}

	
	public function getCategorieLogementActuel()
	{

		return $this->categorie_logement_actuel;
	}

	
	public function getOrigineDemande()
	{

		return $this->origine_demande;
	}

	
	public function getTypeStructure()
	{

		return $this->type_structure;
	}

	
	public function getReferent()
	{

		return $this->referent;
	}

	
	public function getLoyerActuel()
	{

		return $this->loyer_actuel;
	}

	
	public function getProfessionActuelle()
	{

		return $this->profession_actuelle;
	}

	
	public function getEmployeurActuel()
	{

		return $this->employeur_actuel;
	}

	
	public function getVilleEmployeurActuel()
	{

		return $this->ville_employeur_actuel;
	}

	
	public function getDptEmployeurActuel()
	{

		return $this->dpt_employeur_actuel;
	}

	
	public function getDateEmbauche($format = 'Y-m-d')
	{

		if ($this->date_embauche === null || $this->date_embauche === '') {
			return null;
		} elseif (!is_int($this->date_embauche)) {
						$ts = strtotime($this->date_embauche);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [date_embauche] as date/time value: " . var_export($this->date_embauche, true));
			}
		} else {
			$ts = $this->date_embauche;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getTypeContrat()
	{

		return $this->type_contrat;
	}

	
	public function getTrancheSalaire()
	{

		return $this->tranche_salaire;
	}

	
	public function getSalaireExact()
	{

		return $this->salaire_exact;
	}

	
	public function getDettesCredits()
	{

		return $this->dettes_credits;
	}

	
	public function getMotifRechercheLogement()
	{

		return $this->motif_recherche_logement;
	}

	
	public function getObservations()
	{

		return $this->observations;
	}

	
	public function setId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = PersonnePeer::ID;
		}

	} 
	
	public function setDossierId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->dossier_id !== $v) {
			$this->dossier_id = $v;
			$this->modifiedColumns[] = PersonnePeer::DOSSIER_ID;
		}

		if ($this->aDossier !== null && $this->aDossier->getId() !== $v) {
			$this->aDossier = null;
		}

	} 
	
	public function setNom($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->nom !== $v) {
			$this->nom = $v;
			$this->modifiedColumns[] = PersonnePeer::NOM;
		}

	} 
	
	public function setPrenom($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->prenom !== $v) {
			$this->prenom = $v;
			$this->modifiedColumns[] = PersonnePeer::PRENOM;
		}

	} 
	
	public function setNumTelephone($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->num_telephone !== $v) {
			$this->num_telephone = $v;
			$this->modifiedColumns[] = PersonnePeer::NUM_TELEPHONE;
		}

	} 
	
	public function setSexe($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->sexe !== $v) {
			$this->sexe = $v;
			$this->modifiedColumns[] = PersonnePeer::SEXE;
		}

	} 
	
	public function setDateNaissance($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [date_naissance] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->date_naissance !== $ts) {
			$this->date_naissance = $ts;
			$this->modifiedColumns[] = PersonnePeer::DATE_NAISSANCE;
		}

	} 
	
	public function setTrancheAge($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->tranche_age !== $v) {
			$this->tranche_age = $v;
			$this->modifiedColumns[] = PersonnePeer::TRANCHE_AGE;
		}

	} 
	
	public function setStatut($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->statut !== $v) {
			$this->statut = $v;
			$this->modifiedColumns[] = PersonnePeer::STATUT;
		}

	} 
	
	public function setEnfants($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->enfants !== $v) {
			$this->enfants = $v;
			$this->modifiedColumns[] = PersonnePeer::ENFANTS;
		}

	} 
	
	public function setNbEnfants($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->nb_enfants !== $v) {
			$this->nb_enfants = $v;
			$this->modifiedColumns[] = PersonnePeer::NB_ENFANTS;
		}

	} 
	
	public function setLieuNaissance($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->lieu_naissance !== $v) {
			$this->lieu_naissance = $v;
			$this->modifiedColumns[] = PersonnePeer::LIEU_NAISSANCE;
		}

	} 
	
	public function setNationalite($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->nationalite !== $v) {
			$this->nationalite = $v;
			$this->modifiedColumns[] = PersonnePeer::NATIONALITE;
		}

	} 
	
	public function setAdresseActuelle($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->adresse_actuelle !== $v) {
			$this->adresse_actuelle = $v;
			$this->modifiedColumns[] = PersonnePeer::ADRESSE_ACTUELLE;
		}

	} 
	
	public function setVilleActuelle($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->ville_actuelle !== $v) {
			$this->ville_actuelle = $v;
			$this->modifiedColumns[] = PersonnePeer::VILLE_ACTUELLE;
		}

	} 
	
	public function setTypeLogementActuel($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->type_logement_actuel !== $v) {
			$this->type_logement_actuel = $v;
			$this->modifiedColumns[] = PersonnePeer::TYPE_LOGEMENT_ACTUEL;
		}

	} 
	
	public function setCategorieLogementActuel($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->categorie_logement_actuel !== $v) {
			$this->categorie_logement_actuel = $v;
			$this->modifiedColumns[] = PersonnePeer::CATEGORIE_LOGEMENT_ACTUEL;
		}

	} 
	
	public function setOrigineDemande($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->origine_demande !== $v) {
			$this->origine_demande = $v;
			$this->modifiedColumns[] = PersonnePeer::ORIGINE_DEMANDE;
		}

	} 
	
	public function setTypeStructure($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->type_structure !== $v) {
			$this->type_structure = $v;
			$this->modifiedColumns[] = PersonnePeer::TYPE_STRUCTURE;
		}

	} 
	
	public function setReferent($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->referent !== $v) {
			$this->referent = $v;
			$this->modifiedColumns[] = PersonnePeer::REFERENT;
		}

	} 
	
	public function setLoyerActuel($v)
	{

		if ($this->loyer_actuel !== $v) {
			$this->loyer_actuel = $v;
			$this->modifiedColumns[] = PersonnePeer::LOYER_ACTUEL;
		}

	} 
	
	public function setProfessionActuelle($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->profession_actuelle !== $v) {
			$this->profession_actuelle = $v;
			$this->modifiedColumns[] = PersonnePeer::PROFESSION_ACTUELLE;
		}

	} 
	
	public function setEmployeurActuel($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->employeur_actuel !== $v) {
			$this->employeur_actuel = $v;
			$this->modifiedColumns[] = PersonnePeer::EMPLOYEUR_ACTUEL;
		}

	} 
	
	public function setVilleEmployeurActuel($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->ville_employeur_actuel !== $v) {
			$this->ville_employeur_actuel = $v;
			$this->modifiedColumns[] = PersonnePeer::VILLE_EMPLOYEUR_ACTUEL;
		}

	} 
	
	public function setDptEmployeurActuel($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->dpt_employeur_actuel !== $v) {
			$this->dpt_employeur_actuel = $v;
			$this->modifiedColumns[] = PersonnePeer::DPT_EMPLOYEUR_ACTUEL;
		}

	} 
	
	public function setDateEmbauche($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [date_embauche] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->date_embauche !== $ts) {
			$this->date_embauche = $ts;
			$this->modifiedColumns[] = PersonnePeer::DATE_EMBAUCHE;
		}

	} 
	
	public function setTypeContrat($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->type_contrat !== $v) {
			$this->type_contrat = $v;
			$this->modifiedColumns[] = PersonnePeer::TYPE_CONTRAT;
		}

	} 
	
	public function setTrancheSalaire($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->tranche_salaire !== $v) {
			$this->tranche_salaire = $v;
			$this->modifiedColumns[] = PersonnePeer::TRANCHE_SALAIRE;
		}

	} 
	
	public function setSalaireExact($v)
	{

		if ($this->salaire_exact !== $v) {
			$this->salaire_exact = $v;
			$this->modifiedColumns[] = PersonnePeer::SALAIRE_EXACT;
		}

	} 
	
	public function setDettesCredits($v)
	{

		if ($this->dettes_credits !== $v) {
			$this->dettes_credits = $v;
			$this->modifiedColumns[] = PersonnePeer::DETTES_CREDITS;
		}

	} 
	
	public function setMotifRechercheLogement($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->motif_recherche_logement !== $v) {
			$this->motif_recherche_logement = $v;
			$this->modifiedColumns[] = PersonnePeer::MOTIF_RECHERCHE_LOGEMENT;
		}

	} 
	
	public function setObservations($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->observations !== $v) {
			$this->observations = $v;
			$this->modifiedColumns[] = PersonnePeer::OBSERVATIONS;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->dossier_id = $rs->getInt($startcol + 1);

			$this->nom = $rs->getString($startcol + 2);

			$this->prenom = $rs->getString($startcol + 3);

			$this->num_telephone = $rs->getString($startcol + 4);

			$this->sexe = $rs->getString($startcol + 5);

			$this->date_naissance = $rs->getDate($startcol + 6, null);

			$this->tranche_age = $rs->getInt($startcol + 7);

			$this->statut = $rs->getString($startcol + 8);

			$this->enfants = $rs->getString($startcol + 9);

			$this->nb_enfants = $rs->getInt($startcol + 10);

			$this->lieu_naissance = $rs->getString($startcol + 11);

			$this->nationalite = $rs->getString($startcol + 12);

			$this->adresse_actuelle = $rs->getString($startcol + 13);

			$this->ville_actuelle = $rs->getString($startcol + 14);

			$this->type_logement_actuel = $rs->getString($startcol + 15);

			$this->categorie_logement_actuel = $rs->getString($startcol + 16);

			$this->origine_demande = $rs->getString($startcol + 17);

			$this->type_structure = $rs->getString($startcol + 18);

			$this->referent = $rs->getString($startcol + 19);

			$this->loyer_actuel = $rs->getFloat($startcol + 20);

			$this->profession_actuelle = $rs->getString($startcol + 21);

			$this->employeur_actuel = $rs->getString($startcol + 22);

			$this->ville_employeur_actuel = $rs->getString($startcol + 23);

			$this->dpt_employeur_actuel = $rs->getInt($startcol + 24);

			$this->date_embauche = $rs->getDate($startcol + 25, null);

			$this->type_contrat = $rs->getString($startcol + 26);

			$this->tranche_salaire = $rs->getInt($startcol + 27);

			$this->salaire_exact = $rs->getFloat($startcol + 28);

			$this->dettes_credits = $rs->getFloat($startcol + 29);

			$this->motif_recherche_logement = $rs->getString($startcol + 30);

			$this->observations = $rs->getString($startcol + 31);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 32; 
		} catch (Exception $e) {
			throw new PropelException("Error populating Personne object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(PersonnePeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			PersonnePeer::doDelete($this, $con);
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
			$con = Propel::getConnection(PersonnePeer::DATABASE_NAME);
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
					$pk = PersonnePeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += PersonnePeer::doUpdate($this, $con);
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


			if (($retval = PersonnePeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = PersonnePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getNom();
				break;
			case 3:
				return $this->getPrenom();
				break;
			case 4:
				return $this->getNumTelephone();
				break;
			case 5:
				return $this->getSexe();
				break;
			case 6:
				return $this->getDateNaissance();
				break;
			case 7:
				return $this->getTrancheAge();
				break;
			case 8:
				return $this->getStatut();
				break;
			case 9:
				return $this->getEnfants();
				break;
			case 10:
				return $this->getNbEnfants();
				break;
			case 11:
				return $this->getLieuNaissance();
				break;
			case 12:
				return $this->getNationalite();
				break;
			case 13:
				return $this->getAdresseActuelle();
				break;
			case 14:
				return $this->getVilleActuelle();
				break;
			case 15:
				return $this->getTypeLogementActuel();
				break;
			case 16:
				return $this->getCategorieLogementActuel();
				break;
			case 17:
				return $this->getOrigineDemande();
				break;
			case 18:
				return $this->getTypeStructure();
				break;
			case 19:
				return $this->getReferent();
				break;
			case 20:
				return $this->getLoyerActuel();
				break;
			case 21:
				return $this->getProfessionActuelle();
				break;
			case 22:
				return $this->getEmployeurActuel();
				break;
			case 23:
				return $this->getVilleEmployeurActuel();
				break;
			case 24:
				return $this->getDptEmployeurActuel();
				break;
			case 25:
				return $this->getDateEmbauche();
				break;
			case 26:
				return $this->getTypeContrat();
				break;
			case 27:
				return $this->getTrancheSalaire();
				break;
			case 28:
				return $this->getSalaireExact();
				break;
			case 29:
				return $this->getDettesCredits();
				break;
			case 30:
				return $this->getMotifRechercheLogement();
				break;
			case 31:
				return $this->getObservations();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = PersonnePeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getDossierId(),
			$keys[2] => $this->getNom(),
			$keys[3] => $this->getPrenom(),
			$keys[4] => $this->getNumTelephone(),
			$keys[5] => $this->getSexe(),
			$keys[6] => $this->getDateNaissance(),
			$keys[7] => $this->getTrancheAge(),
			$keys[8] => $this->getStatut(),
			$keys[9] => $this->getEnfants(),
			$keys[10] => $this->getNbEnfants(),
			$keys[11] => $this->getLieuNaissance(),
			$keys[12] => $this->getNationalite(),
			$keys[13] => $this->getAdresseActuelle(),
			$keys[14] => $this->getVilleActuelle(),
			$keys[15] => $this->getTypeLogementActuel(),
			$keys[16] => $this->getCategorieLogementActuel(),
			$keys[17] => $this->getOrigineDemande(),
			$keys[18] => $this->getTypeStructure(),
			$keys[19] => $this->getReferent(),
			$keys[20] => $this->getLoyerActuel(),
			$keys[21] => $this->getProfessionActuelle(),
			$keys[22] => $this->getEmployeurActuel(),
			$keys[23] => $this->getVilleEmployeurActuel(),
			$keys[24] => $this->getDptEmployeurActuel(),
			$keys[25] => $this->getDateEmbauche(),
			$keys[26] => $this->getTypeContrat(),
			$keys[27] => $this->getTrancheSalaire(),
			$keys[28] => $this->getSalaireExact(),
			$keys[29] => $this->getDettesCredits(),
			$keys[30] => $this->getMotifRechercheLogement(),
			$keys[31] => $this->getObservations(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = PersonnePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setNom($value);
				break;
			case 3:
				$this->setPrenom($value);
				break;
			case 4:
				$this->setNumTelephone($value);
				break;
			case 5:
				$this->setSexe($value);
				break;
			case 6:
				$this->setDateNaissance($value);
				break;
			case 7:
				$this->setTrancheAge($value);
				break;
			case 8:
				$this->setStatut($value);
				break;
			case 9:
				$this->setEnfants($value);
				break;
			case 10:
				$this->setNbEnfants($value);
				break;
			case 11:
				$this->setLieuNaissance($value);
				break;
			case 12:
				$this->setNationalite($value);
				break;
			case 13:
				$this->setAdresseActuelle($value);
				break;
			case 14:
				$this->setVilleActuelle($value);
				break;
			case 15:
				$this->setTypeLogementActuel($value);
				break;
			case 16:
				$this->setCategorieLogementActuel($value);
				break;
			case 17:
				$this->setOrigineDemande($value);
				break;
			case 18:
				$this->setTypeStructure($value);
				break;
			case 19:
				$this->setReferent($value);
				break;
			case 20:
				$this->setLoyerActuel($value);
				break;
			case 21:
				$this->setProfessionActuelle($value);
				break;
			case 22:
				$this->setEmployeurActuel($value);
				break;
			case 23:
				$this->setVilleEmployeurActuel($value);
				break;
			case 24:
				$this->setDptEmployeurActuel($value);
				break;
			case 25:
				$this->setDateEmbauche($value);
				break;
			case 26:
				$this->setTypeContrat($value);
				break;
			case 27:
				$this->setTrancheSalaire($value);
				break;
			case 28:
				$this->setSalaireExact($value);
				break;
			case 29:
				$this->setDettesCredits($value);
				break;
			case 30:
				$this->setMotifRechercheLogement($value);
				break;
			case 31:
				$this->setObservations($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = PersonnePeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setDossierId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setNom($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setPrenom($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setNumTelephone($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setSexe($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setDateNaissance($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setTrancheAge($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setStatut($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setEnfants($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setNbEnfants($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setLieuNaissance($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setNationalite($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setAdresseActuelle($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setVilleActuelle($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setTypeLogementActuel($arr[$keys[15]]);
		if (array_key_exists($keys[16], $arr)) $this->setCategorieLogementActuel($arr[$keys[16]]);
		if (array_key_exists($keys[17], $arr)) $this->setOrigineDemande($arr[$keys[17]]);
		if (array_key_exists($keys[18], $arr)) $this->setTypeStructure($arr[$keys[18]]);
		if (array_key_exists($keys[19], $arr)) $this->setReferent($arr[$keys[19]]);
		if (array_key_exists($keys[20], $arr)) $this->setLoyerActuel($arr[$keys[20]]);
		if (array_key_exists($keys[21], $arr)) $this->setProfessionActuelle($arr[$keys[21]]);
		if (array_key_exists($keys[22], $arr)) $this->setEmployeurActuel($arr[$keys[22]]);
		if (array_key_exists($keys[23], $arr)) $this->setVilleEmployeurActuel($arr[$keys[23]]);
		if (array_key_exists($keys[24], $arr)) $this->setDptEmployeurActuel($arr[$keys[24]]);
		if (array_key_exists($keys[25], $arr)) $this->setDateEmbauche($arr[$keys[25]]);
		if (array_key_exists($keys[26], $arr)) $this->setTypeContrat($arr[$keys[26]]);
		if (array_key_exists($keys[27], $arr)) $this->setTrancheSalaire($arr[$keys[27]]);
		if (array_key_exists($keys[28], $arr)) $this->setSalaireExact($arr[$keys[28]]);
		if (array_key_exists($keys[29], $arr)) $this->setDettesCredits($arr[$keys[29]]);
		if (array_key_exists($keys[30], $arr)) $this->setMotifRechercheLogement($arr[$keys[30]]);
		if (array_key_exists($keys[31], $arr)) $this->setObservations($arr[$keys[31]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(PersonnePeer::DATABASE_NAME);

		if ($this->isColumnModified(PersonnePeer::ID)) $criteria->add(PersonnePeer::ID, $this->id);
		if ($this->isColumnModified(PersonnePeer::DOSSIER_ID)) $criteria->add(PersonnePeer::DOSSIER_ID, $this->dossier_id);
		if ($this->isColumnModified(PersonnePeer::NOM)) $criteria->add(PersonnePeer::NOM, $this->nom);
		if ($this->isColumnModified(PersonnePeer::PRENOM)) $criteria->add(PersonnePeer::PRENOM, $this->prenom);
		if ($this->isColumnModified(PersonnePeer::NUM_TELEPHONE)) $criteria->add(PersonnePeer::NUM_TELEPHONE, $this->num_telephone);
		if ($this->isColumnModified(PersonnePeer::SEXE)) $criteria->add(PersonnePeer::SEXE, $this->sexe);
		if ($this->isColumnModified(PersonnePeer::DATE_NAISSANCE)) $criteria->add(PersonnePeer::DATE_NAISSANCE, $this->date_naissance);
		if ($this->isColumnModified(PersonnePeer::TRANCHE_AGE)) $criteria->add(PersonnePeer::TRANCHE_AGE, $this->tranche_age);
		if ($this->isColumnModified(PersonnePeer::STATUT)) $criteria->add(PersonnePeer::STATUT, $this->statut);
		if ($this->isColumnModified(PersonnePeer::ENFANTS)) $criteria->add(PersonnePeer::ENFANTS, $this->enfants);
		if ($this->isColumnModified(PersonnePeer::NB_ENFANTS)) $criteria->add(PersonnePeer::NB_ENFANTS, $this->nb_enfants);
		if ($this->isColumnModified(PersonnePeer::LIEU_NAISSANCE)) $criteria->add(PersonnePeer::LIEU_NAISSANCE, $this->lieu_naissance);
		if ($this->isColumnModified(PersonnePeer::NATIONALITE)) $criteria->add(PersonnePeer::NATIONALITE, $this->nationalite);
		if ($this->isColumnModified(PersonnePeer::ADRESSE_ACTUELLE)) $criteria->add(PersonnePeer::ADRESSE_ACTUELLE, $this->adresse_actuelle);
		if ($this->isColumnModified(PersonnePeer::VILLE_ACTUELLE)) $criteria->add(PersonnePeer::VILLE_ACTUELLE, $this->ville_actuelle);
		if ($this->isColumnModified(PersonnePeer::TYPE_LOGEMENT_ACTUEL)) $criteria->add(PersonnePeer::TYPE_LOGEMENT_ACTUEL, $this->type_logement_actuel);
		if ($this->isColumnModified(PersonnePeer::CATEGORIE_LOGEMENT_ACTUEL)) $criteria->add(PersonnePeer::CATEGORIE_LOGEMENT_ACTUEL, $this->categorie_logement_actuel);
		if ($this->isColumnModified(PersonnePeer::ORIGINE_DEMANDE)) $criteria->add(PersonnePeer::ORIGINE_DEMANDE, $this->origine_demande);
		if ($this->isColumnModified(PersonnePeer::TYPE_STRUCTURE)) $criteria->add(PersonnePeer::TYPE_STRUCTURE, $this->type_structure);
		if ($this->isColumnModified(PersonnePeer::REFERENT)) $criteria->add(PersonnePeer::REFERENT, $this->referent);
		if ($this->isColumnModified(PersonnePeer::LOYER_ACTUEL)) $criteria->add(PersonnePeer::LOYER_ACTUEL, $this->loyer_actuel);
		if ($this->isColumnModified(PersonnePeer::PROFESSION_ACTUELLE)) $criteria->add(PersonnePeer::PROFESSION_ACTUELLE, $this->profession_actuelle);
		if ($this->isColumnModified(PersonnePeer::EMPLOYEUR_ACTUEL)) $criteria->add(PersonnePeer::EMPLOYEUR_ACTUEL, $this->employeur_actuel);
		if ($this->isColumnModified(PersonnePeer::VILLE_EMPLOYEUR_ACTUEL)) $criteria->add(PersonnePeer::VILLE_EMPLOYEUR_ACTUEL, $this->ville_employeur_actuel);
		if ($this->isColumnModified(PersonnePeer::DPT_EMPLOYEUR_ACTUEL)) $criteria->add(PersonnePeer::DPT_EMPLOYEUR_ACTUEL, $this->dpt_employeur_actuel);
		if ($this->isColumnModified(PersonnePeer::DATE_EMBAUCHE)) $criteria->add(PersonnePeer::DATE_EMBAUCHE, $this->date_embauche);
		if ($this->isColumnModified(PersonnePeer::TYPE_CONTRAT)) $criteria->add(PersonnePeer::TYPE_CONTRAT, $this->type_contrat);
		if ($this->isColumnModified(PersonnePeer::TRANCHE_SALAIRE)) $criteria->add(PersonnePeer::TRANCHE_SALAIRE, $this->tranche_salaire);
		if ($this->isColumnModified(PersonnePeer::SALAIRE_EXACT)) $criteria->add(PersonnePeer::SALAIRE_EXACT, $this->salaire_exact);
		if ($this->isColumnModified(PersonnePeer::DETTES_CREDITS)) $criteria->add(PersonnePeer::DETTES_CREDITS, $this->dettes_credits);
		if ($this->isColumnModified(PersonnePeer::MOTIF_RECHERCHE_LOGEMENT)) $criteria->add(PersonnePeer::MOTIF_RECHERCHE_LOGEMENT, $this->motif_recherche_logement);
		if ($this->isColumnModified(PersonnePeer::OBSERVATIONS)) $criteria->add(PersonnePeer::OBSERVATIONS, $this->observations);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(PersonnePeer::DATABASE_NAME);

		$criteria->add(PersonnePeer::ID, $this->id);

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

		$copyObj->setNom($this->nom);

		$copyObj->setPrenom($this->prenom);

		$copyObj->setNumTelephone($this->num_telephone);

		$copyObj->setSexe($this->sexe);

		$copyObj->setDateNaissance($this->date_naissance);

		$copyObj->setTrancheAge($this->tranche_age);

		$copyObj->setStatut($this->statut);

		$copyObj->setEnfants($this->enfants);

		$copyObj->setNbEnfants($this->nb_enfants);

		$copyObj->setLieuNaissance($this->lieu_naissance);

		$copyObj->setNationalite($this->nationalite);

		$copyObj->setAdresseActuelle($this->adresse_actuelle);

		$copyObj->setVilleActuelle($this->ville_actuelle);

		$copyObj->setTypeLogementActuel($this->type_logement_actuel);

		$copyObj->setCategorieLogementActuel($this->categorie_logement_actuel);

		$copyObj->setOrigineDemande($this->origine_demande);

		$copyObj->setTypeStructure($this->type_structure);

		$copyObj->setReferent($this->referent);

		$copyObj->setLoyerActuel($this->loyer_actuel);

		$copyObj->setProfessionActuelle($this->profession_actuelle);

		$copyObj->setEmployeurActuel($this->employeur_actuel);

		$copyObj->setVilleEmployeurActuel($this->ville_employeur_actuel);

		$copyObj->setDptEmployeurActuel($this->dpt_employeur_actuel);

		$copyObj->setDateEmbauche($this->date_embauche);

		$copyObj->setTypeContrat($this->type_contrat);

		$copyObj->setTrancheSalaire($this->tranche_salaire);

		$copyObj->setSalaireExact($this->salaire_exact);

		$copyObj->setDettesCredits($this->dettes_credits);

		$copyObj->setMotifRechercheLogement($this->motif_recherche_logement);

		$copyObj->setObservations($this->observations);


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
			self::$peer = new PersonnePeer();
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