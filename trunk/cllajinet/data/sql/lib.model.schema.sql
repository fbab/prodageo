
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

#-----------------------------------------------------------------------------
#-- personne
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `personne`;


CREATE TABLE `personne`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`dossier_id` INTEGER,
	`nom` VARCHAR(255),
	`prenom` VARCHAR(255),
	`num_telephone` VARCHAR(255),
	`sexe` VARCHAR(255),
	`date_naissance` DATE,
	`tranche_age` INTEGER,
	`statut` VARCHAR(255),
	`enfants` VARCHAR(255),
	`nb_enfants` INTEGER,
	`lieu_naissance` VARCHAR(255),
	`nationalite` VARCHAR(255),
	`adresse_actuelle` VARCHAR(255),
	`ville_actuelle` VARCHAR(255),
	`type_logement_actuel` VARCHAR(255),
	`categorie_logement_actuel` VARCHAR(255),
	`origine_demande` VARCHAR(255),
	`type_structure` VARCHAR(255),
	`referent` VARCHAR(255),
	`loyer_actuel` FLOAT,
	`profession_actuelle` VARCHAR(255),
	`employeur_actuel` VARCHAR(255),
	`ville_employeur_actuel` VARCHAR(255),
	`dpt_employeur_actuel` INTEGER,
	`date_embauche` DATE,
	`type_contrat` VARCHAR(255),
	`tranche_salaire` INTEGER,
	`salaire_exact` FLOAT,
	`dettes_credits` FLOAT,
	`motif_recherche_logement` TEXT,
	`observations` TEXT,
	PRIMARY KEY (`id`),
	INDEX `personne_FI_1` (`dossier_id`),
	CONSTRAINT `personne_FK_1`
		FOREIGN KEY (`dossier_id`)
		REFERENCES `dossier` (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- dossier
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `dossier`;


CREATE TABLE `dossier`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`etat` VARCHAR(255),
	`date_ouverture_dossier` DATE,
	`date_cloture_dossier` DATE,
	`type_dossier` VARCHAR(255),
	PRIMARY KEY (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- finDossier
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `finDossier`;


CREATE TABLE `finDossier`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`dossier_id` INTEGER,
	`type_parc` VARCHAR(255),
	`type_proprietaire_bailleur` VARCHAR(255),
	`nom_proprietaire_bailleur` VARCHAR(255),
	`type_condition_acces` VARCHAR(255),
	`nom_condition_acces` VARCHAR(255),
	`ville_logement` VARCHAR(255),
	`departement_logement` INTEGER,
	`type_logement` VARCHAR(255),
	`superficie_logement` INTEGER,
	`loyer` FLOAT,
	`edf_gdf` FLOAT,
	`chauffage` FLOAT,
	`difficultes_rencontrees` TEXT,
	`categorie_classement` VARCHAR(255),
	PRIMARY KEY (`id`),
	INDEX `finDossier_FI_1` (`dossier_id`),
	CONSTRAINT `finDossier_FK_1`
		FOREIGN KEY (`dossier_id`)
		REFERENCES `dossier` (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- nationalite
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `nationalite`;


CREATE TABLE `nationalite`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`listnationalite` VARCHAR(255),
	PRIMARY KEY (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- ville
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `ville`;


CREATE TABLE `ville`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`listville` VARCHAR(255),
	PRIMARY KEY (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- categorielogementactuel
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `categorielogementactuel`;


CREATE TABLE `categorielogementactuel`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`listcategorielogementactuel` VARCHAR(255),
	PRIMARY KEY (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- typeStructure
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `typeStructure`;


CREATE TABLE `typeStructure`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`listtypestructure` VARCHAR(255),
	PRIMARY KEY (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- typeContrat
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `typeContrat`;


CREATE TABLE `typeContrat`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`listtypecontrat` VARCHAR(255),
	PRIMARY KEY (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- trancheSalaire
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `trancheSalaire`;


CREATE TABLE `trancheSalaire`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`listtranchesalaire` VARCHAR(255),
	PRIMARY KEY (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- typeParc
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `typeParc`;


CREATE TABLE `typeParc`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`listtypeparc` VARCHAR(255),
	PRIMARY KEY (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- typeProprietaireHLM
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `typeProprietaireHLM`;


CREATE TABLE `typeProprietaireHLM`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`listtypeproprietairehlm` VARCHAR(255),
	PRIMARY KEY (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- typeProprietairePrive
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `typeProprietairePrive`;


CREATE TABLE `typeProprietairePrive`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`listtypeproprietaireprive` VARCHAR(255),
	PRIMARY KEY (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- typeProprietaireHebTemp
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `typeProprietaireHebTemp`;


CREATE TABLE `typeProprietaireHebTemp`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`listtypeproprietairehebtemp` VARCHAR(255),
	PRIMARY KEY (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- nomBailleursHLM
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `nomBailleursHLM`;


CREATE TABLE `nomBailleursHLM`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`listnombailleurshlm` VARCHAR(255),
	PRIMARY KEY (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- nomFJT
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `nomFJT`;


CREATE TABLE `nomFJT`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`listnomfjt` VARCHAR(255),
	PRIMARY KEY (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- nomCHRS
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `nomCHRS`;


CREATE TABLE `nomCHRS`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`listnomchrs` VARCHAR(255),
	PRIMARY KEY (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- conditionsAcces
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `conditionsAcces`;


CREATE TABLE `conditionsAcces`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`listconditionsacces` VARCHAR(255),
	PRIMARY KEY (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- nomLocapass
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `nomLocapass`;


CREATE TABLE `nomLocapass`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`listnomlocapass` VARCHAR(255),
	PRIMARY KEY (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- typeLogement
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `typeLogement`;


CREATE TABLE `typeLogement`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`listtypelogement` VARCHAR(255),
	PRIMARY KEY (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- listeRequetes
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `listeRequetes`;


CREATE TABLE `listeRequetes`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`listrequetes` TEXT,
	`titrerequetes` VARCHAR(255),
	`chapitre_id` INTEGER,
	PRIMARY KEY (`id`),
	INDEX `listeRequetes_FI_1` (`chapitre_id`),
	CONSTRAINT `listeRequetes_FK_1`
		FOREIGN KEY (`chapitre_id`)
		REFERENCES `chapitre` (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- statistiques
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `statistiques`;


CREATE TABLE `statistiques`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`datestat` DATE,
	`nbmenagesrecu` INTEGER,
	`nbadultesrecu` INTEGER,
	`nbenfantsrecu` INTEGER,
	`nbloges` INTEGER,
	`nblogesadultes` INTEGER,
	`nblogesenfants` INTEGER,
	`nblogesdirect` INTEGER,
	`nblogesdirectadultes` INTEGER,
	`nblogesdirectenfants` INTEGER,
	`nblogesindirect` INTEGER,
	`nblogesindirectadultes` INTEGER,
	`nblogesindirectenfants` INTEGER,
	`nbaltsousloc` INTEGER,
	`nbaltaltsouslocadultes` INTEGER,
	`nbaltaltsouslocenfants` INTEGER,
	`nbencours` INTEGER,
	`nbencoursadultes` INTEGER,
	`nbencoursenfants` INTEGER,
	`nbabandon` INTEGER,
	`nbabandonadultes` INTEGER,
	`nbabandonenfants` INTEGER,
	`sexe` INTEGER,
	`trancheage` INTEGER,
	`nationalite` INTEGER,
	`situationfamiliale` INTEGER,
	`originedemande` INTEGER,
	`villeresidence` INTEGER,
	`modehebergement` INTEGER,
	`lieutravail` INTEGER,
	`typecontrat` INTEGER,
	`revenus` INTEGER,
	`sexeloges` INTEGER,
	`trancheageloges` INTEGER,
	`nationaliteloges` INTEGER,
	`situationfamilialeloges` INTEGER,
	`originedemandeloges` INTEGER,
	`villeresidenceloges` INTEGER,
	`modehebergementloges` INTEGER,
	`lieutravailloges` INTEGER,
	`typecontratloges` INTEGER,
	`revenusloges` INTEGER,
	`typelogementtrouveloges` INTEGER,
	`typeproprietaireloges` INTEGER,
	`villelogementtrouveloges` INTEGER,
	`nbrecu` INTEGER,
	`nbabandons` INTEGER,
	PRIMARY KEY (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- chapitre
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `chapitre`;


CREATE TABLE `chapitre`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`anneecreation` INTEGER,
	`anneesupression` INTEGER,
	`titrechapitre` VARCHAR(255),
	PRIMARY KEY (`id`)
)Type=InnoDB;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
