<?php


abstract class BaseStatistiques extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $datestat;


	
	protected $nbmenagesrecu;


	
	protected $nbadultesrecu;


	
	protected $nbenfantsrecu;


	
	protected $nbloges;


	
	protected $nblogesadultes;


	
	protected $nblogesenfants;


	
	protected $nblogesdirect;


	
	protected $nblogesdirectadultes;


	
	protected $nblogesdirectenfants;


	
	protected $nblogesindirect;


	
	protected $nblogesindirectadultes;


	
	protected $nblogesindirectenfants;


	
	protected $nbaltsousloc;


	
	protected $nbaltsouslocadultes;


	
	protected $nbaltsouslocenfants;


	
	protected $nbencours;


	
	protected $nbencoursadultes;


	
	protected $nbencoursenfants;


	
	protected $nbabandon;


	
	protected $nbabandonadultes;


	
	protected $nbabandonenfants;


	
	protected $sexe;


	
	protected $trancheage;


	
	protected $nationalite;


	
	protected $situationfamiliale;


	
	protected $originedemande;


	
	protected $villeresidence;


	
	protected $modehebergement;


	
	protected $lieutravail;


	
	protected $typecontrat;


	
	protected $revenus;


	
	protected $sexeloges;


	
	protected $trancheageloges;


	
	protected $nationaliteloges;


	
	protected $situationfamilialeloges;


	
	protected $originedemandeloges;


	
	protected $villeresidenceloges;


	
	protected $modehebergementloges;


	
	protected $lieutravailloges;


	
	protected $typecontratloges;


	
	protected $revenusloges;


	
	protected $typelogementtrouveloges;


	
	protected $typeproprietaireloges;


	
	protected $villelogementtrouveloges;


	
	protected $nbrecu;


	
	protected $nbabandons;

	
	protected $collStattableaus;

	
	protected $lastStattableauCriteria = null;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getId()
	{

		return $this->id;
	}

	
	public function getDatestat($format = 'Y-m-d')
	{

		if ($this->datestat === null || $this->datestat === '') {
			return null;
		} elseif (!is_int($this->datestat)) {
						$ts = strtotime($this->datestat);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [datestat] as date/time value: " . var_export($this->datestat, true));
			}
		} else {
			$ts = $this->datestat;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getNbmenagesrecu()
	{

		return $this->nbmenagesrecu;
	}

	
	public function getNbadultesrecu()
	{

		return $this->nbadultesrecu;
	}

	
	public function getNbenfantsrecu()
	{

		return $this->nbenfantsrecu;
	}

	
	public function getNbloges()
	{

		return $this->nbloges;
	}

	
	public function getNblogesadultes()
	{

		return $this->nblogesadultes;
	}

	
	public function getNblogesenfants()
	{

		return $this->nblogesenfants;
	}

	
	public function getNblogesdirect()
	{

		return $this->nblogesdirect;
	}

	
	public function getNblogesdirectadultes()
	{

		return $this->nblogesdirectadultes;
	}

	
	public function getNblogesdirectenfants()
	{

		return $this->nblogesdirectenfants;
	}

	
	public function getNblogesindirect()
	{

		return $this->nblogesindirect;
	}

	
	public function getNblogesindirectadultes()
	{

		return $this->nblogesindirectadultes;
	}

	
	public function getNblogesindirectenfants()
	{

		return $this->nblogesindirectenfants;
	}

	
	public function getNbaltsousloc()
	{

		return $this->nbaltsousloc;
	}

	
	public function getNbaltsouslocadultes()
	{

		return $this->nbaltsouslocadultes;
	}

	
	public function getNbaltsouslocenfants()
	{

		return $this->nbaltsouslocenfants;
	}

	
	public function getNbencours()
	{

		return $this->nbencours;
	}

	
	public function getNbencoursadultes()
	{

		return $this->nbencoursadultes;
	}

	
	public function getNbencoursenfants()
	{

		return $this->nbencoursenfants;
	}

	
	public function getNbabandon()
	{

		return $this->nbabandon;
	}

	
	public function getNbabandonadultes()
	{

		return $this->nbabandonadultes;
	}

	
	public function getNbabandonenfants()
	{

		return $this->nbabandonenfants;
	}

	
	public function getSexe()
	{

		return $this->sexe;
	}

	
	public function getTrancheage()
	{

		return $this->trancheage;
	}

	
	public function getNationalite()
	{

		return $this->nationalite;
	}

	
	public function getSituationfamiliale()
	{

		return $this->situationfamiliale;
	}

	
	public function getOriginedemande()
	{

		return $this->originedemande;
	}

	
	public function getVilleresidence()
	{

		return $this->villeresidence;
	}

	
	public function getModehebergement()
	{

		return $this->modehebergement;
	}

	
	public function getLieutravail()
	{

		return $this->lieutravail;
	}

	
	public function getTypecontrat()
	{

		return $this->typecontrat;
	}

	
	public function getRevenus()
	{

		return $this->revenus;
	}

	
	public function getSexeloges()
	{

		return $this->sexeloges;
	}

	
	public function getTrancheageloges()
	{

		return $this->trancheageloges;
	}

	
	public function getNationaliteloges()
	{

		return $this->nationaliteloges;
	}

	
	public function getSituationfamilialeloges()
	{

		return $this->situationfamilialeloges;
	}

	
	public function getOriginedemandeloges()
	{

		return $this->originedemandeloges;
	}

	
	public function getVilleresidenceloges()
	{

		return $this->villeresidenceloges;
	}

	
	public function getModehebergementloges()
	{

		return $this->modehebergementloges;
	}

	
	public function getLieutravailloges()
	{

		return $this->lieutravailloges;
	}

	
	public function getTypecontratloges()
	{

		return $this->typecontratloges;
	}

	
	public function getRevenusloges()
	{

		return $this->revenusloges;
	}

	
	public function getTypelogementtrouveloges()
	{

		return $this->typelogementtrouveloges;
	}

	
	public function getTypeproprietaireloges()
	{

		return $this->typeproprietaireloges;
	}

	
	public function getVillelogementtrouveloges()
	{

		return $this->villelogementtrouveloges;
	}

	
	public function getNbrecu()
	{

		return $this->nbrecu;
	}

	
	public function getNbabandons()
	{

		return $this->nbabandons;
	}

	
	public function setId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = StatistiquesPeer::ID;
		}

	} 
	
	public function setDatestat($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [datestat] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->datestat !== $ts) {
			$this->datestat = $ts;
			$this->modifiedColumns[] = StatistiquesPeer::DATESTAT;
		}

	} 
	
	public function setNbmenagesrecu($v)
	{

		if ($this->nbmenagesrecu !== $v) {
			$this->nbmenagesrecu = $v;
			$this->modifiedColumns[] = StatistiquesPeer::NBMENAGESRECU;
		}

	} 
	
	public function setNbadultesrecu($v)
	{

		if ($this->nbadultesrecu !== $v) {
			$this->nbadultesrecu = $v;
			$this->modifiedColumns[] = StatistiquesPeer::NBADULTESRECU;
		}

	} 
	
	public function setNbenfantsrecu($v)
	{

		if ($this->nbenfantsrecu !== $v) {
			$this->nbenfantsrecu = $v;
			$this->modifiedColumns[] = StatistiquesPeer::NBENFANTSRECU;
		}

	} 
	
	public function setNbloges($v)
	{

		if ($this->nbloges !== $v) {
			$this->nbloges = $v;
			$this->modifiedColumns[] = StatistiquesPeer::NBLOGES;
		}

	} 
	
	public function setNblogesadultes($v)
	{

		if ($this->nblogesadultes !== $v) {
			$this->nblogesadultes = $v;
			$this->modifiedColumns[] = StatistiquesPeer::NBLOGESADULTES;
		}

	} 
	
	public function setNblogesenfants($v)
	{

		if ($this->nblogesenfants !== $v) {
			$this->nblogesenfants = $v;
			$this->modifiedColumns[] = StatistiquesPeer::NBLOGESENFANTS;
		}

	} 
	
	public function setNblogesdirect($v)
	{

		if ($this->nblogesdirect !== $v) {
			$this->nblogesdirect = $v;
			$this->modifiedColumns[] = StatistiquesPeer::NBLOGESDIRECT;
		}

	} 
	
	public function setNblogesdirectadultes($v)
	{

		if ($this->nblogesdirectadultes !== $v) {
			$this->nblogesdirectadultes = $v;
			$this->modifiedColumns[] = StatistiquesPeer::NBLOGESDIRECTADULTES;
		}

	} 
	
	public function setNblogesdirectenfants($v)
	{

		if ($this->nblogesdirectenfants !== $v) {
			$this->nblogesdirectenfants = $v;
			$this->modifiedColumns[] = StatistiquesPeer::NBLOGESDIRECTENFANTS;
		}

	} 
	
	public function setNblogesindirect($v)
	{

		if ($this->nblogesindirect !== $v) {
			$this->nblogesindirect = $v;
			$this->modifiedColumns[] = StatistiquesPeer::NBLOGESINDIRECT;
		}

	} 
	
	public function setNblogesindirectadultes($v)
	{

		if ($this->nblogesindirectadultes !== $v) {
			$this->nblogesindirectadultes = $v;
			$this->modifiedColumns[] = StatistiquesPeer::NBLOGESINDIRECTADULTES;
		}

	} 
	
	public function setNblogesindirectenfants($v)
	{

		if ($this->nblogesindirectenfants !== $v) {
			$this->nblogesindirectenfants = $v;
			$this->modifiedColumns[] = StatistiquesPeer::NBLOGESINDIRECTENFANTS;
		}

	} 
	
	public function setNbaltsousloc($v)
	{

		if ($this->nbaltsousloc !== $v) {
			$this->nbaltsousloc = $v;
			$this->modifiedColumns[] = StatistiquesPeer::NBALTSOUSLOC;
		}

	} 
	
	public function setNbaltsouslocadultes($v)
	{

		if ($this->nbaltsouslocadultes !== $v) {
			$this->nbaltsouslocadultes = $v;
			$this->modifiedColumns[] = StatistiquesPeer::NBALTSOUSLOCADULTES;
		}

	} 
	
	public function setNbaltsouslocenfants($v)
	{

		if ($this->nbaltsouslocenfants !== $v) {
			$this->nbaltsouslocenfants = $v;
			$this->modifiedColumns[] = StatistiquesPeer::NBALTSOUSLOCENFANTS;
		}

	} 
	
	public function setNbencours($v)
	{

		if ($this->nbencours !== $v) {
			$this->nbencours = $v;
			$this->modifiedColumns[] = StatistiquesPeer::NBENCOURS;
		}

	} 
	
	public function setNbencoursadultes($v)
	{

		if ($this->nbencoursadultes !== $v) {
			$this->nbencoursadultes = $v;
			$this->modifiedColumns[] = StatistiquesPeer::NBENCOURSADULTES;
		}

	} 
	
	public function setNbencoursenfants($v)
	{

		if ($this->nbencoursenfants !== $v) {
			$this->nbencoursenfants = $v;
			$this->modifiedColumns[] = StatistiquesPeer::NBENCOURSENFANTS;
		}

	} 
	
	public function setNbabandon($v)
	{

		if ($this->nbabandon !== $v) {
			$this->nbabandon = $v;
			$this->modifiedColumns[] = StatistiquesPeer::NBABANDON;
		}

	} 
	
	public function setNbabandonadultes($v)
	{

		if ($this->nbabandonadultes !== $v) {
			$this->nbabandonadultes = $v;
			$this->modifiedColumns[] = StatistiquesPeer::NBABANDONADULTES;
		}

	} 
	
	public function setNbabandonenfants($v)
	{

		if ($this->nbabandonenfants !== $v) {
			$this->nbabandonenfants = $v;
			$this->modifiedColumns[] = StatistiquesPeer::NBABANDONENFANTS;
		}

	} 
	
	public function setSexe($v)
	{

		if ($this->sexe !== $v) {
			$this->sexe = $v;
			$this->modifiedColumns[] = StatistiquesPeer::SEXE;
		}

	} 
	
	public function setTrancheage($v)
	{

		if ($this->trancheage !== $v) {
			$this->trancheage = $v;
			$this->modifiedColumns[] = StatistiquesPeer::TRANCHEAGE;
		}

	} 
	
	public function setNationalite($v)
	{

		if ($this->nationalite !== $v) {
			$this->nationalite = $v;
			$this->modifiedColumns[] = StatistiquesPeer::NATIONALITE;
		}

	} 
	
	public function setSituationfamiliale($v)
	{

		if ($this->situationfamiliale !== $v) {
			$this->situationfamiliale = $v;
			$this->modifiedColumns[] = StatistiquesPeer::SITUATIONFAMILIALE;
		}

	} 
	
	public function setOriginedemande($v)
	{

		if ($this->originedemande !== $v) {
			$this->originedemande = $v;
			$this->modifiedColumns[] = StatistiquesPeer::ORIGINEDEMANDE;
		}

	} 
	
	public function setVilleresidence($v)
	{

		if ($this->villeresidence !== $v) {
			$this->villeresidence = $v;
			$this->modifiedColumns[] = StatistiquesPeer::VILLERESIDENCE;
		}

	} 
	
	public function setModehebergement($v)
	{

		if ($this->modehebergement !== $v) {
			$this->modehebergement = $v;
			$this->modifiedColumns[] = StatistiquesPeer::MODEHEBERGEMENT;
		}

	} 
	
	public function setLieutravail($v)
	{

		if ($this->lieutravail !== $v) {
			$this->lieutravail = $v;
			$this->modifiedColumns[] = StatistiquesPeer::LIEUTRAVAIL;
		}

	} 
	
	public function setTypecontrat($v)
	{

		if ($this->typecontrat !== $v) {
			$this->typecontrat = $v;
			$this->modifiedColumns[] = StatistiquesPeer::TYPECONTRAT;
		}

	} 
	
	public function setRevenus($v)
	{

		if ($this->revenus !== $v) {
			$this->revenus = $v;
			$this->modifiedColumns[] = StatistiquesPeer::REVENUS;
		}

	} 
	
	public function setSexeloges($v)
	{

		if ($this->sexeloges !== $v) {
			$this->sexeloges = $v;
			$this->modifiedColumns[] = StatistiquesPeer::SEXELOGES;
		}

	} 
	
	public function setTrancheageloges($v)
	{

		if ($this->trancheageloges !== $v) {
			$this->trancheageloges = $v;
			$this->modifiedColumns[] = StatistiquesPeer::TRANCHEAGELOGES;
		}

	} 
	
	public function setNationaliteloges($v)
	{

		if ($this->nationaliteloges !== $v) {
			$this->nationaliteloges = $v;
			$this->modifiedColumns[] = StatistiquesPeer::NATIONALITELOGES;
		}

	} 
	
	public function setSituationfamilialeloges($v)
	{

		if ($this->situationfamilialeloges !== $v) {
			$this->situationfamilialeloges = $v;
			$this->modifiedColumns[] = StatistiquesPeer::SITUATIONFAMILIALELOGES;
		}

	} 
	
	public function setOriginedemandeloges($v)
	{

		if ($this->originedemandeloges !== $v) {
			$this->originedemandeloges = $v;
			$this->modifiedColumns[] = StatistiquesPeer::ORIGINEDEMANDELOGES;
		}

	} 
	
	public function setVilleresidenceloges($v)
	{

		if ($this->villeresidenceloges !== $v) {
			$this->villeresidenceloges = $v;
			$this->modifiedColumns[] = StatistiquesPeer::VILLERESIDENCELOGES;
		}

	} 
	
	public function setModehebergementloges($v)
	{

		if ($this->modehebergementloges !== $v) {
			$this->modehebergementloges = $v;
			$this->modifiedColumns[] = StatistiquesPeer::MODEHEBERGEMENTLOGES;
		}

	} 
	
	public function setLieutravailloges($v)
	{

		if ($this->lieutravailloges !== $v) {
			$this->lieutravailloges = $v;
			$this->modifiedColumns[] = StatistiquesPeer::LIEUTRAVAILLOGES;
		}

	} 
	
	public function setTypecontratloges($v)
	{

		if ($this->typecontratloges !== $v) {
			$this->typecontratloges = $v;
			$this->modifiedColumns[] = StatistiquesPeer::TYPECONTRATLOGES;
		}

	} 
	
	public function setRevenusloges($v)
	{

		if ($this->revenusloges !== $v) {
			$this->revenusloges = $v;
			$this->modifiedColumns[] = StatistiquesPeer::REVENUSLOGES;
		}

	} 
	
	public function setTypelogementtrouveloges($v)
	{

		if ($this->typelogementtrouveloges !== $v) {
			$this->typelogementtrouveloges = $v;
			$this->modifiedColumns[] = StatistiquesPeer::TYPELOGEMENTTROUVELOGES;
		}

	} 
	
	public function setTypeproprietaireloges($v)
	{

		if ($this->typeproprietaireloges !== $v) {
			$this->typeproprietaireloges = $v;
			$this->modifiedColumns[] = StatistiquesPeer::TYPEPROPRIETAIRELOGES;
		}

	} 
	
	public function setVillelogementtrouveloges($v)
	{

		if ($this->villelogementtrouveloges !== $v) {
			$this->villelogementtrouveloges = $v;
			$this->modifiedColumns[] = StatistiquesPeer::VILLELOGEMENTTROUVELOGES;
		}

	} 
	
	public function setNbrecu($v)
	{

		if ($this->nbrecu !== $v) {
			$this->nbrecu = $v;
			$this->modifiedColumns[] = StatistiquesPeer::NBRECU;
		}

	} 
	
	public function setNbabandons($v)
	{

		if ($this->nbabandons !== $v) {
			$this->nbabandons = $v;
			$this->modifiedColumns[] = StatistiquesPeer::NBABANDONS;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->datestat = $rs->getDate($startcol + 1, null);

			$this->nbmenagesrecu = $rs->getFloat($startcol + 2);

			$this->nbadultesrecu = $rs->getFloat($startcol + 3);

			$this->nbenfantsrecu = $rs->getFloat($startcol + 4);

			$this->nbloges = $rs->getFloat($startcol + 5);

			$this->nblogesadultes = $rs->getFloat($startcol + 6);

			$this->nblogesenfants = $rs->getFloat($startcol + 7);

			$this->nblogesdirect = $rs->getFloat($startcol + 8);

			$this->nblogesdirectadultes = $rs->getFloat($startcol + 9);

			$this->nblogesdirectenfants = $rs->getFloat($startcol + 10);

			$this->nblogesindirect = $rs->getFloat($startcol + 11);

			$this->nblogesindirectadultes = $rs->getFloat($startcol + 12);

			$this->nblogesindirectenfants = $rs->getFloat($startcol + 13);

			$this->nbaltsousloc = $rs->getFloat($startcol + 14);

			$this->nbaltsouslocadultes = $rs->getFloat($startcol + 15);

			$this->nbaltsouslocenfants = $rs->getFloat($startcol + 16);

			$this->nbencours = $rs->getFloat($startcol + 17);

			$this->nbencoursadultes = $rs->getFloat($startcol + 18);

			$this->nbencoursenfants = $rs->getFloat($startcol + 19);

			$this->nbabandon = $rs->getFloat($startcol + 20);

			$this->nbabandonadultes = $rs->getFloat($startcol + 21);

			$this->nbabandonenfants = $rs->getFloat($startcol + 22);

			$this->sexe = $rs->getFloat($startcol + 23);

			$this->trancheage = $rs->getFloat($startcol + 24);

			$this->nationalite = $rs->getFloat($startcol + 25);

			$this->situationfamiliale = $rs->getFloat($startcol + 26);

			$this->originedemande = $rs->getFloat($startcol + 27);

			$this->villeresidence = $rs->getFloat($startcol + 28);

			$this->modehebergement = $rs->getFloat($startcol + 29);

			$this->lieutravail = $rs->getFloat($startcol + 30);

			$this->typecontrat = $rs->getFloat($startcol + 31);

			$this->revenus = $rs->getFloat($startcol + 32);

			$this->sexeloges = $rs->getFloat($startcol + 33);

			$this->trancheageloges = $rs->getFloat($startcol + 34);

			$this->nationaliteloges = $rs->getFloat($startcol + 35);

			$this->situationfamilialeloges = $rs->getFloat($startcol + 36);

			$this->originedemandeloges = $rs->getFloat($startcol + 37);

			$this->villeresidenceloges = $rs->getFloat($startcol + 38);

			$this->modehebergementloges = $rs->getFloat($startcol + 39);

			$this->lieutravailloges = $rs->getFloat($startcol + 40);

			$this->typecontratloges = $rs->getFloat($startcol + 41);

			$this->revenusloges = $rs->getFloat($startcol + 42);

			$this->typelogementtrouveloges = $rs->getFloat($startcol + 43);

			$this->typeproprietaireloges = $rs->getFloat($startcol + 44);

			$this->villelogementtrouveloges = $rs->getFloat($startcol + 45);

			$this->nbrecu = $rs->getFloat($startcol + 46);

			$this->nbabandons = $rs->getFloat($startcol + 47);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 48; 
		} catch (Exception $e) {
			throw new PropelException("Error populating Statistiques object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(StatistiquesPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			StatistiquesPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(StatistiquesPeer::DATABASE_NAME);
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
					$pk = StatistiquesPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += StatistiquesPeer::doUpdate($this, $con);
				}
				$this->resetModified(); 			}

			if ($this->collStattableaus !== null) {
				foreach($this->collStattableaus as $referrerFK) {
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


			if (($retval = StatistiquesPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collStattableaus !== null) {
					foreach($this->collStattableaus as $referrerFK) {
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
		$pos = StatistiquesPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getDatestat();
				break;
			case 2:
				return $this->getNbmenagesrecu();
				break;
			case 3:
				return $this->getNbadultesrecu();
				break;
			case 4:
				return $this->getNbenfantsrecu();
				break;
			case 5:
				return $this->getNbloges();
				break;
			case 6:
				return $this->getNblogesadultes();
				break;
			case 7:
				return $this->getNblogesenfants();
				break;
			case 8:
				return $this->getNblogesdirect();
				break;
			case 9:
				return $this->getNblogesdirectadultes();
				break;
			case 10:
				return $this->getNblogesdirectenfants();
				break;
			case 11:
				return $this->getNblogesindirect();
				break;
			case 12:
				return $this->getNblogesindirectadultes();
				break;
			case 13:
				return $this->getNblogesindirectenfants();
				break;
			case 14:
				return $this->getNbaltsousloc();
				break;
			case 15:
				return $this->getNbaltsouslocadultes();
				break;
			case 16:
				return $this->getNbaltsouslocenfants();
				break;
			case 17:
				return $this->getNbencours();
				break;
			case 18:
				return $this->getNbencoursadultes();
				break;
			case 19:
				return $this->getNbencoursenfants();
				break;
			case 20:
				return $this->getNbabandon();
				break;
			case 21:
				return $this->getNbabandonadultes();
				break;
			case 22:
				return $this->getNbabandonenfants();
				break;
			case 23:
				return $this->getSexe();
				break;
			case 24:
				return $this->getTrancheage();
				break;
			case 25:
				return $this->getNationalite();
				break;
			case 26:
				return $this->getSituationfamiliale();
				break;
			case 27:
				return $this->getOriginedemande();
				break;
			case 28:
				return $this->getVilleresidence();
				break;
			case 29:
				return $this->getModehebergement();
				break;
			case 30:
				return $this->getLieutravail();
				break;
			case 31:
				return $this->getTypecontrat();
				break;
			case 32:
				return $this->getRevenus();
				break;
			case 33:
				return $this->getSexeloges();
				break;
			case 34:
				return $this->getTrancheageloges();
				break;
			case 35:
				return $this->getNationaliteloges();
				break;
			case 36:
				return $this->getSituationfamilialeloges();
				break;
			case 37:
				return $this->getOriginedemandeloges();
				break;
			case 38:
				return $this->getVilleresidenceloges();
				break;
			case 39:
				return $this->getModehebergementloges();
				break;
			case 40:
				return $this->getLieutravailloges();
				break;
			case 41:
				return $this->getTypecontratloges();
				break;
			case 42:
				return $this->getRevenusloges();
				break;
			case 43:
				return $this->getTypelogementtrouveloges();
				break;
			case 44:
				return $this->getTypeproprietaireloges();
				break;
			case 45:
				return $this->getVillelogementtrouveloges();
				break;
			case 46:
				return $this->getNbrecu();
				break;
			case 47:
				return $this->getNbabandons();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = StatistiquesPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getDatestat(),
			$keys[2] => $this->getNbmenagesrecu(),
			$keys[3] => $this->getNbadultesrecu(),
			$keys[4] => $this->getNbenfantsrecu(),
			$keys[5] => $this->getNbloges(),
			$keys[6] => $this->getNblogesadultes(),
			$keys[7] => $this->getNblogesenfants(),
			$keys[8] => $this->getNblogesdirect(),
			$keys[9] => $this->getNblogesdirectadultes(),
			$keys[10] => $this->getNblogesdirectenfants(),
			$keys[11] => $this->getNblogesindirect(),
			$keys[12] => $this->getNblogesindirectadultes(),
			$keys[13] => $this->getNblogesindirectenfants(),
			$keys[14] => $this->getNbaltsousloc(),
			$keys[15] => $this->getNbaltsouslocadultes(),
			$keys[16] => $this->getNbaltsouslocenfants(),
			$keys[17] => $this->getNbencours(),
			$keys[18] => $this->getNbencoursadultes(),
			$keys[19] => $this->getNbencoursenfants(),
			$keys[20] => $this->getNbabandon(),
			$keys[21] => $this->getNbabandonadultes(),
			$keys[22] => $this->getNbabandonenfants(),
			$keys[23] => $this->getSexe(),
			$keys[24] => $this->getTrancheage(),
			$keys[25] => $this->getNationalite(),
			$keys[26] => $this->getSituationfamiliale(),
			$keys[27] => $this->getOriginedemande(),
			$keys[28] => $this->getVilleresidence(),
			$keys[29] => $this->getModehebergement(),
			$keys[30] => $this->getLieutravail(),
			$keys[31] => $this->getTypecontrat(),
			$keys[32] => $this->getRevenus(),
			$keys[33] => $this->getSexeloges(),
			$keys[34] => $this->getTrancheageloges(),
			$keys[35] => $this->getNationaliteloges(),
			$keys[36] => $this->getSituationfamilialeloges(),
			$keys[37] => $this->getOriginedemandeloges(),
			$keys[38] => $this->getVilleresidenceloges(),
			$keys[39] => $this->getModehebergementloges(),
			$keys[40] => $this->getLieutravailloges(),
			$keys[41] => $this->getTypecontratloges(),
			$keys[42] => $this->getRevenusloges(),
			$keys[43] => $this->getTypelogementtrouveloges(),
			$keys[44] => $this->getTypeproprietaireloges(),
			$keys[45] => $this->getVillelogementtrouveloges(),
			$keys[46] => $this->getNbrecu(),
			$keys[47] => $this->getNbabandons(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = StatistiquesPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setDatestat($value);
				break;
			case 2:
				$this->setNbmenagesrecu($value);
				break;
			case 3:
				$this->setNbadultesrecu($value);
				break;
			case 4:
				$this->setNbenfantsrecu($value);
				break;
			case 5:
				$this->setNbloges($value);
				break;
			case 6:
				$this->setNblogesadultes($value);
				break;
			case 7:
				$this->setNblogesenfants($value);
				break;
			case 8:
				$this->setNblogesdirect($value);
				break;
			case 9:
				$this->setNblogesdirectadultes($value);
				break;
			case 10:
				$this->setNblogesdirectenfants($value);
				break;
			case 11:
				$this->setNblogesindirect($value);
				break;
			case 12:
				$this->setNblogesindirectadultes($value);
				break;
			case 13:
				$this->setNblogesindirectenfants($value);
				break;
			case 14:
				$this->setNbaltsousloc($value);
				break;
			case 15:
				$this->setNbaltsouslocadultes($value);
				break;
			case 16:
				$this->setNbaltsouslocenfants($value);
				break;
			case 17:
				$this->setNbencours($value);
				break;
			case 18:
				$this->setNbencoursadultes($value);
				break;
			case 19:
				$this->setNbencoursenfants($value);
				break;
			case 20:
				$this->setNbabandon($value);
				break;
			case 21:
				$this->setNbabandonadultes($value);
				break;
			case 22:
				$this->setNbabandonenfants($value);
				break;
			case 23:
				$this->setSexe($value);
				break;
			case 24:
				$this->setTrancheage($value);
				break;
			case 25:
				$this->setNationalite($value);
				break;
			case 26:
				$this->setSituationfamiliale($value);
				break;
			case 27:
				$this->setOriginedemande($value);
				break;
			case 28:
				$this->setVilleresidence($value);
				break;
			case 29:
				$this->setModehebergement($value);
				break;
			case 30:
				$this->setLieutravail($value);
				break;
			case 31:
				$this->setTypecontrat($value);
				break;
			case 32:
				$this->setRevenus($value);
				break;
			case 33:
				$this->setSexeloges($value);
				break;
			case 34:
				$this->setTrancheageloges($value);
				break;
			case 35:
				$this->setNationaliteloges($value);
				break;
			case 36:
				$this->setSituationfamilialeloges($value);
				break;
			case 37:
				$this->setOriginedemandeloges($value);
				break;
			case 38:
				$this->setVilleresidenceloges($value);
				break;
			case 39:
				$this->setModehebergementloges($value);
				break;
			case 40:
				$this->setLieutravailloges($value);
				break;
			case 41:
				$this->setTypecontratloges($value);
				break;
			case 42:
				$this->setRevenusloges($value);
				break;
			case 43:
				$this->setTypelogementtrouveloges($value);
				break;
			case 44:
				$this->setTypeproprietaireloges($value);
				break;
			case 45:
				$this->setVillelogementtrouveloges($value);
				break;
			case 46:
				$this->setNbrecu($value);
				break;
			case 47:
				$this->setNbabandons($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = StatistiquesPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setDatestat($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setNbmenagesrecu($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setNbadultesrecu($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setNbenfantsrecu($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setNbloges($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setNblogesadultes($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setNblogesenfants($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setNblogesdirect($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setNblogesdirectadultes($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setNblogesdirectenfants($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setNblogesindirect($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setNblogesindirectadultes($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setNblogesindirectenfants($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setNbaltsousloc($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setNbaltsouslocadultes($arr[$keys[15]]);
		if (array_key_exists($keys[16], $arr)) $this->setNbaltsouslocenfants($arr[$keys[16]]);
		if (array_key_exists($keys[17], $arr)) $this->setNbencours($arr[$keys[17]]);
		if (array_key_exists($keys[18], $arr)) $this->setNbencoursadultes($arr[$keys[18]]);
		if (array_key_exists($keys[19], $arr)) $this->setNbencoursenfants($arr[$keys[19]]);
		if (array_key_exists($keys[20], $arr)) $this->setNbabandon($arr[$keys[20]]);
		if (array_key_exists($keys[21], $arr)) $this->setNbabandonadultes($arr[$keys[21]]);
		if (array_key_exists($keys[22], $arr)) $this->setNbabandonenfants($arr[$keys[22]]);
		if (array_key_exists($keys[23], $arr)) $this->setSexe($arr[$keys[23]]);
		if (array_key_exists($keys[24], $arr)) $this->setTrancheage($arr[$keys[24]]);
		if (array_key_exists($keys[25], $arr)) $this->setNationalite($arr[$keys[25]]);
		if (array_key_exists($keys[26], $arr)) $this->setSituationfamiliale($arr[$keys[26]]);
		if (array_key_exists($keys[27], $arr)) $this->setOriginedemande($arr[$keys[27]]);
		if (array_key_exists($keys[28], $arr)) $this->setVilleresidence($arr[$keys[28]]);
		if (array_key_exists($keys[29], $arr)) $this->setModehebergement($arr[$keys[29]]);
		if (array_key_exists($keys[30], $arr)) $this->setLieutravail($arr[$keys[30]]);
		if (array_key_exists($keys[31], $arr)) $this->setTypecontrat($arr[$keys[31]]);
		if (array_key_exists($keys[32], $arr)) $this->setRevenus($arr[$keys[32]]);
		if (array_key_exists($keys[33], $arr)) $this->setSexeloges($arr[$keys[33]]);
		if (array_key_exists($keys[34], $arr)) $this->setTrancheageloges($arr[$keys[34]]);
		if (array_key_exists($keys[35], $arr)) $this->setNationaliteloges($arr[$keys[35]]);
		if (array_key_exists($keys[36], $arr)) $this->setSituationfamilialeloges($arr[$keys[36]]);
		if (array_key_exists($keys[37], $arr)) $this->setOriginedemandeloges($arr[$keys[37]]);
		if (array_key_exists($keys[38], $arr)) $this->setVilleresidenceloges($arr[$keys[38]]);
		if (array_key_exists($keys[39], $arr)) $this->setModehebergementloges($arr[$keys[39]]);
		if (array_key_exists($keys[40], $arr)) $this->setLieutravailloges($arr[$keys[40]]);
		if (array_key_exists($keys[41], $arr)) $this->setTypecontratloges($arr[$keys[41]]);
		if (array_key_exists($keys[42], $arr)) $this->setRevenusloges($arr[$keys[42]]);
		if (array_key_exists($keys[43], $arr)) $this->setTypelogementtrouveloges($arr[$keys[43]]);
		if (array_key_exists($keys[44], $arr)) $this->setTypeproprietaireloges($arr[$keys[44]]);
		if (array_key_exists($keys[45], $arr)) $this->setVillelogementtrouveloges($arr[$keys[45]]);
		if (array_key_exists($keys[46], $arr)) $this->setNbrecu($arr[$keys[46]]);
		if (array_key_exists($keys[47], $arr)) $this->setNbabandons($arr[$keys[47]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(StatistiquesPeer::DATABASE_NAME);

		if ($this->isColumnModified(StatistiquesPeer::ID)) $criteria->add(StatistiquesPeer::ID, $this->id);
		if ($this->isColumnModified(StatistiquesPeer::DATESTAT)) $criteria->add(StatistiquesPeer::DATESTAT, $this->datestat);
		if ($this->isColumnModified(StatistiquesPeer::NBMENAGESRECU)) $criteria->add(StatistiquesPeer::NBMENAGESRECU, $this->nbmenagesrecu);
		if ($this->isColumnModified(StatistiquesPeer::NBADULTESRECU)) $criteria->add(StatistiquesPeer::NBADULTESRECU, $this->nbadultesrecu);
		if ($this->isColumnModified(StatistiquesPeer::NBENFANTSRECU)) $criteria->add(StatistiquesPeer::NBENFANTSRECU, $this->nbenfantsrecu);
		if ($this->isColumnModified(StatistiquesPeer::NBLOGES)) $criteria->add(StatistiquesPeer::NBLOGES, $this->nbloges);
		if ($this->isColumnModified(StatistiquesPeer::NBLOGESADULTES)) $criteria->add(StatistiquesPeer::NBLOGESADULTES, $this->nblogesadultes);
		if ($this->isColumnModified(StatistiquesPeer::NBLOGESENFANTS)) $criteria->add(StatistiquesPeer::NBLOGESENFANTS, $this->nblogesenfants);
		if ($this->isColumnModified(StatistiquesPeer::NBLOGESDIRECT)) $criteria->add(StatistiquesPeer::NBLOGESDIRECT, $this->nblogesdirect);
		if ($this->isColumnModified(StatistiquesPeer::NBLOGESDIRECTADULTES)) $criteria->add(StatistiquesPeer::NBLOGESDIRECTADULTES, $this->nblogesdirectadultes);
		if ($this->isColumnModified(StatistiquesPeer::NBLOGESDIRECTENFANTS)) $criteria->add(StatistiquesPeer::NBLOGESDIRECTENFANTS, $this->nblogesdirectenfants);
		if ($this->isColumnModified(StatistiquesPeer::NBLOGESINDIRECT)) $criteria->add(StatistiquesPeer::NBLOGESINDIRECT, $this->nblogesindirect);
		if ($this->isColumnModified(StatistiquesPeer::NBLOGESINDIRECTADULTES)) $criteria->add(StatistiquesPeer::NBLOGESINDIRECTADULTES, $this->nblogesindirectadultes);
		if ($this->isColumnModified(StatistiquesPeer::NBLOGESINDIRECTENFANTS)) $criteria->add(StatistiquesPeer::NBLOGESINDIRECTENFANTS, $this->nblogesindirectenfants);
		if ($this->isColumnModified(StatistiquesPeer::NBALTSOUSLOC)) $criteria->add(StatistiquesPeer::NBALTSOUSLOC, $this->nbaltsousloc);
		if ($this->isColumnModified(StatistiquesPeer::NBALTSOUSLOCADULTES)) $criteria->add(StatistiquesPeer::NBALTSOUSLOCADULTES, $this->nbaltsouslocadultes);
		if ($this->isColumnModified(StatistiquesPeer::NBALTSOUSLOCENFANTS)) $criteria->add(StatistiquesPeer::NBALTSOUSLOCENFANTS, $this->nbaltsouslocenfants);
		if ($this->isColumnModified(StatistiquesPeer::NBENCOURS)) $criteria->add(StatistiquesPeer::NBENCOURS, $this->nbencours);
		if ($this->isColumnModified(StatistiquesPeer::NBENCOURSADULTES)) $criteria->add(StatistiquesPeer::NBENCOURSADULTES, $this->nbencoursadultes);
		if ($this->isColumnModified(StatistiquesPeer::NBENCOURSENFANTS)) $criteria->add(StatistiquesPeer::NBENCOURSENFANTS, $this->nbencoursenfants);
		if ($this->isColumnModified(StatistiquesPeer::NBABANDON)) $criteria->add(StatistiquesPeer::NBABANDON, $this->nbabandon);
		if ($this->isColumnModified(StatistiquesPeer::NBABANDONADULTES)) $criteria->add(StatistiquesPeer::NBABANDONADULTES, $this->nbabandonadultes);
		if ($this->isColumnModified(StatistiquesPeer::NBABANDONENFANTS)) $criteria->add(StatistiquesPeer::NBABANDONENFANTS, $this->nbabandonenfants);
		if ($this->isColumnModified(StatistiquesPeer::SEXE)) $criteria->add(StatistiquesPeer::SEXE, $this->sexe);
		if ($this->isColumnModified(StatistiquesPeer::TRANCHEAGE)) $criteria->add(StatistiquesPeer::TRANCHEAGE, $this->trancheage);
		if ($this->isColumnModified(StatistiquesPeer::NATIONALITE)) $criteria->add(StatistiquesPeer::NATIONALITE, $this->nationalite);
		if ($this->isColumnModified(StatistiquesPeer::SITUATIONFAMILIALE)) $criteria->add(StatistiquesPeer::SITUATIONFAMILIALE, $this->situationfamiliale);
		if ($this->isColumnModified(StatistiquesPeer::ORIGINEDEMANDE)) $criteria->add(StatistiquesPeer::ORIGINEDEMANDE, $this->originedemande);
		if ($this->isColumnModified(StatistiquesPeer::VILLERESIDENCE)) $criteria->add(StatistiquesPeer::VILLERESIDENCE, $this->villeresidence);
		if ($this->isColumnModified(StatistiquesPeer::MODEHEBERGEMENT)) $criteria->add(StatistiquesPeer::MODEHEBERGEMENT, $this->modehebergement);
		if ($this->isColumnModified(StatistiquesPeer::LIEUTRAVAIL)) $criteria->add(StatistiquesPeer::LIEUTRAVAIL, $this->lieutravail);
		if ($this->isColumnModified(StatistiquesPeer::TYPECONTRAT)) $criteria->add(StatistiquesPeer::TYPECONTRAT, $this->typecontrat);
		if ($this->isColumnModified(StatistiquesPeer::REVENUS)) $criteria->add(StatistiquesPeer::REVENUS, $this->revenus);
		if ($this->isColumnModified(StatistiquesPeer::SEXELOGES)) $criteria->add(StatistiquesPeer::SEXELOGES, $this->sexeloges);
		if ($this->isColumnModified(StatistiquesPeer::TRANCHEAGELOGES)) $criteria->add(StatistiquesPeer::TRANCHEAGELOGES, $this->trancheageloges);
		if ($this->isColumnModified(StatistiquesPeer::NATIONALITELOGES)) $criteria->add(StatistiquesPeer::NATIONALITELOGES, $this->nationaliteloges);
		if ($this->isColumnModified(StatistiquesPeer::SITUATIONFAMILIALELOGES)) $criteria->add(StatistiquesPeer::SITUATIONFAMILIALELOGES, $this->situationfamilialeloges);
		if ($this->isColumnModified(StatistiquesPeer::ORIGINEDEMANDELOGES)) $criteria->add(StatistiquesPeer::ORIGINEDEMANDELOGES, $this->originedemandeloges);
		if ($this->isColumnModified(StatistiquesPeer::VILLERESIDENCELOGES)) $criteria->add(StatistiquesPeer::VILLERESIDENCELOGES, $this->villeresidenceloges);
		if ($this->isColumnModified(StatistiquesPeer::MODEHEBERGEMENTLOGES)) $criteria->add(StatistiquesPeer::MODEHEBERGEMENTLOGES, $this->modehebergementloges);
		if ($this->isColumnModified(StatistiquesPeer::LIEUTRAVAILLOGES)) $criteria->add(StatistiquesPeer::LIEUTRAVAILLOGES, $this->lieutravailloges);
		if ($this->isColumnModified(StatistiquesPeer::TYPECONTRATLOGES)) $criteria->add(StatistiquesPeer::TYPECONTRATLOGES, $this->typecontratloges);
		if ($this->isColumnModified(StatistiquesPeer::REVENUSLOGES)) $criteria->add(StatistiquesPeer::REVENUSLOGES, $this->revenusloges);
		if ($this->isColumnModified(StatistiquesPeer::TYPELOGEMENTTROUVELOGES)) $criteria->add(StatistiquesPeer::TYPELOGEMENTTROUVELOGES, $this->typelogementtrouveloges);
		if ($this->isColumnModified(StatistiquesPeer::TYPEPROPRIETAIRELOGES)) $criteria->add(StatistiquesPeer::TYPEPROPRIETAIRELOGES, $this->typeproprietaireloges);
		if ($this->isColumnModified(StatistiquesPeer::VILLELOGEMENTTROUVELOGES)) $criteria->add(StatistiquesPeer::VILLELOGEMENTTROUVELOGES, $this->villelogementtrouveloges);
		if ($this->isColumnModified(StatistiquesPeer::NBRECU)) $criteria->add(StatistiquesPeer::NBRECU, $this->nbrecu);
		if ($this->isColumnModified(StatistiquesPeer::NBABANDONS)) $criteria->add(StatistiquesPeer::NBABANDONS, $this->nbabandons);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(StatistiquesPeer::DATABASE_NAME);

		$criteria->add(StatistiquesPeer::ID, $this->id);

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

		$copyObj->setDatestat($this->datestat);

		$copyObj->setNbmenagesrecu($this->nbmenagesrecu);

		$copyObj->setNbadultesrecu($this->nbadultesrecu);

		$copyObj->setNbenfantsrecu($this->nbenfantsrecu);

		$copyObj->setNbloges($this->nbloges);

		$copyObj->setNblogesadultes($this->nblogesadultes);

		$copyObj->setNblogesenfants($this->nblogesenfants);

		$copyObj->setNblogesdirect($this->nblogesdirect);

		$copyObj->setNblogesdirectadultes($this->nblogesdirectadultes);

		$copyObj->setNblogesdirectenfants($this->nblogesdirectenfants);

		$copyObj->setNblogesindirect($this->nblogesindirect);

		$copyObj->setNblogesindirectadultes($this->nblogesindirectadultes);

		$copyObj->setNblogesindirectenfants($this->nblogesindirectenfants);

		$copyObj->setNbaltsousloc($this->nbaltsousloc);

		$copyObj->setNbaltsouslocadultes($this->nbaltsouslocadultes);

		$copyObj->setNbaltsouslocenfants($this->nbaltsouslocenfants);

		$copyObj->setNbencours($this->nbencours);

		$copyObj->setNbencoursadultes($this->nbencoursadultes);

		$copyObj->setNbencoursenfants($this->nbencoursenfants);

		$copyObj->setNbabandon($this->nbabandon);

		$copyObj->setNbabandonadultes($this->nbabandonadultes);

		$copyObj->setNbabandonenfants($this->nbabandonenfants);

		$copyObj->setSexe($this->sexe);

		$copyObj->setTrancheage($this->trancheage);

		$copyObj->setNationalite($this->nationalite);

		$copyObj->setSituationfamiliale($this->situationfamiliale);

		$copyObj->setOriginedemande($this->originedemande);

		$copyObj->setVilleresidence($this->villeresidence);

		$copyObj->setModehebergement($this->modehebergement);

		$copyObj->setLieutravail($this->lieutravail);

		$copyObj->setTypecontrat($this->typecontrat);

		$copyObj->setRevenus($this->revenus);

		$copyObj->setSexeloges($this->sexeloges);

		$copyObj->setTrancheageloges($this->trancheageloges);

		$copyObj->setNationaliteloges($this->nationaliteloges);

		$copyObj->setSituationfamilialeloges($this->situationfamilialeloges);

		$copyObj->setOriginedemandeloges($this->originedemandeloges);

		$copyObj->setVilleresidenceloges($this->villeresidenceloges);

		$copyObj->setModehebergementloges($this->modehebergementloges);

		$copyObj->setLieutravailloges($this->lieutravailloges);

		$copyObj->setTypecontratloges($this->typecontratloges);

		$copyObj->setRevenusloges($this->revenusloges);

		$copyObj->setTypelogementtrouveloges($this->typelogementtrouveloges);

		$copyObj->setTypeproprietaireloges($this->typeproprietaireloges);

		$copyObj->setVillelogementtrouveloges($this->villelogementtrouveloges);

		$copyObj->setNbrecu($this->nbrecu);

		$copyObj->setNbabandons($this->nbabandons);


		if ($deepCopy) {
									$copyObj->setNew(false);

			foreach($this->getStattableaus() as $relObj) {
				$copyObj->addStattableau($relObj->copy($deepCopy));
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
			self::$peer = new StatistiquesPeer();
		}
		return self::$peer;
	}

	
	public function initStattableaus()
	{
		if ($this->collStattableaus === null) {
			$this->collStattableaus = array();
		}
	}

	
	public function getStattableaus($criteria = null, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collStattableaus === null) {
			if ($this->isNew()) {
			   $this->collStattableaus = array();
			} else {

				$criteria->add(StattableauPeer::STATISTIQUES_ID, $this->getId());

				StattableauPeer::addSelectColumns($criteria);
				$this->collStattableaus = StattableauPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(StattableauPeer::STATISTIQUES_ID, $this->getId());

				StattableauPeer::addSelectColumns($criteria);
				if (!isset($this->lastStattableauCriteria) || !$this->lastStattableauCriteria->equals($criteria)) {
					$this->collStattableaus = StattableauPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastStattableauCriteria = $criteria;
		return $this->collStattableaus;
	}

	
	public function countStattableaus($criteria = null, $distinct = false, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(StattableauPeer::STATISTIQUES_ID, $this->getId());

		return StattableauPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addStattableau(Stattableau $l)
	{
		$this->collStattableaus[] = $l;
		$l->setStatistiques($this);
	}

} 