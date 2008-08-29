<?php

/**
 * Subclass for representing a row from the 'statistiques' table.
 *
 * 
 *
 * @package lib.model
 */ 
class Statistiques extends BaseStatistiques
{
      function __toString()
      {
      	return $this->id;
      }

      function statExecRequete($maRequete,$maVariable)
      {
        $maRequete=sprintf($maRequete,'variable');
	$connection = Propel::getConnection();
	$query = $maRequete;
	$statement = $connection->prepareStatement($query);
	$resultset = $statement->executeQuery();
	$resultset->next();
        $resultat=0;
        if($resultset->getInt('variable')!=null){
	$resultat = $resultset->getInt('variable');}
        return $resultat;
      }


      function statExecRequeteTableau()
      {
	$connection = Propel::getConnection();
	$query ='SELECT typeStructure.listtypestructure AS %s,COUNT(*) AS %s FROM typeStructure,personne WHERE personne.type_structure=typeStructure.id GROUP BY personne.type_structure';
        $query=sprintf($query,'col1','col2');
	$statement = $connection->prepareStatement($query);
	$resultset = $statement->executeQuery();
        $i=0;
	while($resultset->next()){
           $tab1[$i]=$resultset->getRow();
           $i=$i+1;
        }
        return $tab1;
       }


      function statNbAdultesrecu()
      {
	$connection = Propel::getConnection();
	$query = 'SELECT COUNT(*) AS nbAdultes FROM personne ';//'SELECT COUNT(*) AS nbAdultes FROM personne '
	$statement = $connection->prepareStatement($query);
	$resultset = $statement->executeQuery();
	$resultset->next();
	$nbAdultes = $resultset->getInt('nbAdultes');
        return $nbAdultes;
      }

      function statNbEnfantsrecu()
      {
	$connection = Propel::getConnection();
	$query = 'SELECT SUM(nb_enfants) AS nombreEnfants FROM personne ';
	$statement = $connection->prepareStatement($query);
	$resultset = $statement->executeQuery();
	$resultset->next();
	$nbEnfants = $resultset->getInt('nombreEnfants');
        return $nbEnfants;
      }

      function statNbLoges()
      {
	$connection = Propel::getConnection();
	$query = 'SELECT COUNT(*) AS nbLoges FROM dossier WHERE id IN (SELECT dossier_id FROM finDossier WHERE categorie_classement<>2)';
	$statement = $connection->prepareStatement($query);
	$resultset = $statement->executeQuery();
	$resultset->next();
	$nbLoges = $resultset->getInt('nbLoges');
        return $nbLoges;
      }

      function statNbLogesAdultes()
      {
	$connection = Propel::getConnection();
	$query = 'SELECT COUNT(*) AS nbLogesAdultes FROM personne WHERE dossier_id IN (SELECT dossier_id FROM finDossier WHERE categorie_classement<>2)';
	$statement = $connection->prepareStatement($query);
	$resultset = $statement->executeQuery();
	$resultset->next();
	$nbLogesAdultes = $resultset->getInt('nbLogesAdultes');
        return $nbLogesAdultes;
      }

      function statNbLogesEnfants()
      {
	$connection = Propel::getConnection();
	$query = 'SELECT SUM(nb_enfants) AS nbLogesEnfants FROM personne WHERE dossier_id IN (SELECT dossier_id FROM finDossier WHERE categorie_classement<>2)';
	$statement = $connection->prepareStatement($query);
	$resultset = $statement->executeQuery();
	$resultset->next();
        $nbLogesEnfants=0;
        if($resultset->getInt('nbLogesEnfants')!=null){
	$nbLogesEnfants = $resultset->getInt('nbLogesEnfants');}
        return $nbLogesEnfants;
      }

      function statNbLogesDirect()
      {
	$connection = Propel::getConnection();
	$query = 'SELECT COUNT(*) AS nbLogesDirect FROM dossier WHERE id IN (SELECT dossier_id FROM finDossier WHERE categorie_classement=0)';
	$statement = $connection->prepareStatement($query);
	$resultset = $statement->executeQuery();
	$resultset->next();
	$nbLogesDirect = $resultset->getInt('nbLogesDirect');
        return $nbLogesDirect;
      }

      function statNbLogesDirectAdultes()
      {
	$connection = Propel::getConnection();
	$query = 'SELECT COUNT(*) AS nbLogesDirectAdultes FROM personne WHERE dossier_id IN (SELECT dossier_id FROM finDossier WHERE categorie_classement=0)';
	$statement = $connection->prepareStatement($query);
	$resultset = $statement->executeQuery();
	$resultset->next();
	$nbLogesDirectAdultes = $resultset->getInt('nbLogesDirectAdultes');
        return $nbLogesDirectAdultes;
      }

      function statNbLogesDirectEnfants()
      {
	$connection = Propel::getConnection();
	$query = 'SELECT SUM(nb_enfants) AS nbLogesDirectEnfants FROM personne WHERE dossier_id IN (SELECT dossier_id FROM finDossier WHERE categorie_classement=0)';
	$statement = $connection->prepareStatement($query);
	$resultset = $statement->executeQuery();
	$resultset->next();
        $nbLogesDirectEnfants=0;
        if($resultset->getInt('nbLogesDirectEnfants')!=null){
	$nbLogesDirectEnfants = $resultset->getInt('nbLogesDirectEnfants');}
        return $nbLogesDirectEnfants;
      }

      function statNbLogesIndirect()
      {
	$connection = Propel::getConnection();
	$query = 'SELECT COUNT(*) AS nbLogesIndirect FROM dossier WHERE id IN (SELECT dossier_id FROM finDossier WHERE categorie_classement=1)';
	$statement = $connection->prepareStatement($query);
	$resultset = $statement->executeQuery();
	$resultset->next();
	$nbLogesIndirect = $resultset->getInt('nbLogesIndirect');
        return $nbLogesIndirect;
      }

      function statNbLogesIndirectAdultes()
      {
	$connection = Propel::getConnection();
	$query = 'SELECT COUNT(*) AS nbLogesIndirectAdultes FROM personne WHERE dossier_id IN (SELECT dossier_id FROM finDossier WHERE categorie_classement=1)';
	$statement = $connection->prepareStatement($query);
	$resultset = $statement->executeQuery();
	$resultset->next();
	$nbLogesIndirectAdultes = $resultset->getInt('nbLogesIndirectAdultes');
        return $nbLogesIndirectAdultes;
      }

      function statNbLogesIndirectEnfants()
      {
	$connection = Propel::getConnection();
	$query = 'SELECT SUM(nb_enfants) AS nbLogesIndirectEnfants FROM personne WHERE dossier_id IN (SELECT dossier_id FROM finDossier WHERE categorie_classement=1)';
	$statement = $connection->prepareStatement($query);
	$resultset = $statement->executeQuery();
	$resultset->next();
        $nbLogesIndirectEnfants=0;
        if($resultset->getInt('nbLogesIndirectEnfants')!=null){
	$nbLogesIndirectEnfants = $resultset->getInt('nbLogesIndirectEnfants');}
        return $nbLogesIndirectEnfants;
      }

function statNbLogesAltSousloc()
      {
	$connection = Propel::getConnection();
	$query = 'SELECT COUNT(*) AS nbLogesAltSousloc FROM dossier WHERE id IN (SELECT dossier_id FROM finDossier WHERE categorie_classement=3)';
	$statement = $connection->prepareStatement($query);
	$resultset = $statement->executeQuery();
	$resultset->next();
	$nbLogesAltSousloc = $resultset->getInt('nbLogesAltSousloc');
        return $nbLogesAltSousloc;
      }

      function statNbLogesAltSouslocAdultes()
      {
	$connection = Propel::getConnection();
	$query = 'SELECT COUNT(*) AS nbLogesAltSouslocAdultes FROM personne WHERE dossier_id IN (SELECT dossier_id FROM finDossier WHERE categorie_classement=3)';
	$statement = $connection->prepareStatement($query);
	$resultset = $statement->executeQuery();
	$resultset->next();
	$nbLogesAltSouslocAdultes = $resultset->getInt('nbLogesAltSouslocAdultes');
        return $nbLogesAltSouslocAdultes;
      }

      function statNbLogesAltSouslocEnfants()
      {
	$connection = Propel::getConnection();
	$query = 'SELECT SUM(nb_enfants) AS nbLogesAltSouslocEnfants FROM personne WHERE dossier_id IN (SELECT dossier_id FROM finDossier WHERE categorie_classement=3)';
	$statement = $connection->prepareStatement($query);
	$resultset = $statement->executeQuery();
	$resultset->next();
        $nbLogesAltSouslocEnfants=0;
        if($resultset->getInt('nbLogesAltSouslocEnfants')!=null){
	$nbLogesAltSouslocEnfants = $resultset->getInt('nbLogesAltSouslocEnfants');}
        return $nbLogesAltSouslocEnfants;
      }

      function statNbEnCours()
      {
	$connection = Propel::getConnection();
	$query = 'SELECT COUNT(*) AS nbEnCours FROM dossier WHERE etat="en cours" ';
	$statement = $connection->prepareStatement($query);
	$resultset = $statement->executeQuery();
	$resultset->next();
	$nbEnCours = $resultset->getInt('nbEnCours');
        return $nbEnCours;
      }

      function statNbEnCoursAdultes()
      {
	$connection = Propel::getConnection();
	$query = 'SELECT COUNT(*) AS nbEnCoursAdultes FROM personne WHERE dossier_id IN (SELECT id FROM dossier WHERE etat="en cours")';
	$statement = $connection->prepareStatement($query);
	$resultset = $statement->executeQuery();
	$resultset->next();
	$nbEnCoursAdultes = $resultset->getInt('nbEnCoursAdultes');
        return $nbEnCoursAdultes;
      }

      function statNbEnCoursEnfants()
      {
	$connection = Propel::getConnection();
	$query = 'SELECT SUM(nb_enfants) AS nbEnCoursEnfants FROM personne WHERE dossier_id IN (SELECT id FROM dossier WHERE etat="en cours")';
	$statement = $connection->prepareStatement($query);
	$resultset = $statement->executeQuery();
	$resultset->next();
        $nbEnCoursEnfants=0;
        if($resultset->getInt('nbEnCoursEnfants')!=null){
	$nbEnCoursEnfants = $resultset->getInt('nbEnCoursEnfants');}
        return $nbEnCoursEnfants;
      }

      function statNbAbandons()
      {
	$connection = Propel::getConnection();
	$query = 'SELECT COUNT(*) AS nbAbandons FROM dossier WHERE id IN (SELECT dossier_id FROM finDossier WHERE categorie_classement=2)';
	$statement = $connection->prepareStatement($query);
	$resultset = $statement->executeQuery();
	$resultset->next();
	$nbAbandons = $resultset->getInt('nbAbandons');
        return $nbAbandons;
      }

      function statNbAbandonsAdultes()
      {
	$connection = Propel::getConnection();
	$query = 'SELECT COUNT(*) AS nbAbandonsAdultes FROM personne WHERE dossier_id IN (SELECT dossier_id FROM finDossier WHERE categorie_classement=2)';
	$statement = $connection->prepareStatement($query);
	$resultset = $statement->executeQuery();
	$resultset->next();
	$nbAbandonsAdultes = $resultset->getInt('nbAbandonsAdultes');
        return $nbAbandonsAdultes;
      }

      function statNbAbandonsEnfants()
      {
	$connection = Propel::getConnection();
	$query = 'SELECT SUM(nb_enfants) AS statNbAbandonsEnfants FROM personne WHERE dossier_id IN (SELECT dossier_id FROM finDossier WHERE categorie_classement=2)';
	$statement = $connection->prepareStatement($query);
	$resultset = $statement->executeQuery();
	$resultset->next();
        $nbEnCoursEnfants=0;
        if($resultset->getInt('statNbAbandonsEnfants')!=null){
	$statNbAbandonsEnfants = $resultset->getInt('statNbAbandonsEnfants');}
        return $statNbAbandonsEnfants;
      }

      function statSexe()
      {
	$connection = Propel::getConnection();
	$query = 'SELECT COUNT(*) AS sexeMasculin FROM personne WHERE sexe=1';
	$statement = $connection->prepareStatement($query);
	$resultset = $statement->executeQuery();
	$resultset->next();
	$sexeMasculin = $resultset->getInt('sexeMasculin');
        return $sexeMasculin;
      }

      function statTrancheAge()
      {
	$connection = Propel::getConnection();
	$query = 'SELECT COUNT(*) AS trancheAge FROM personne WHERE tranche_age=1';
	$statement = $connection->prepareStatement($query);
	$resultset = $statement->executeQuery();
	$resultset->next();
	$trancheAge = $resultset->getInt('trancheAge');
        return $trancheAge;
      }
}
