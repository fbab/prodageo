<?php

/**
 * Subclass for representing a row from the 'personne' table.
 *
 * 
 *
 * @package lib.model
 */ 
class Personne extends BasePersonne
{

      function getListNationalite()
      {
	$connection = Propel::getConnection();
	$query = 'SELECT listnationalite AS liste FROM nationalite';
	$statement = $connection->prepareStatement($query);
	$resultset = $statement->executeQuery();
        $i=0;
	while($resultset->next()){
        $liste[$i] = $resultset->getString('liste');
	$i++;
	}
        return $liste;
        
      }
      function getListVilles()
      {
	$connection = Propel::getConnection();
	$query = 'SELECT listville AS liste FROM ville';
	$statement = $connection->prepareStatement($query);
	$resultset = $statement->executeQuery();
        $i=0;
	while($resultset->next()){
        $liste[$i] = $resultset->getString('liste');
	$i++;
	}
        return $liste;
        
      }
function getListCatLogActuel()
      {
	$connection = Propel::getConnection();
	$query = 'SELECT listcategorielogementactuel AS liste FROM categorielogementactuel';
	$statement = $connection->prepareStatement($query);
	$resultset = $statement->executeQuery();
        $i=0;
	while($resultset->next()){
        $liste[$i] = $resultset->getString('liste');
	$i++;
	}
        return $liste;
        
      }
function getListTypeStructure()
      {
	$connection = Propel::getConnection();
	$query = 'SELECT listtypestructure AS liste FROM typeStructure';
	$statement = $connection->prepareStatement($query);
	$resultset = $statement->executeQuery();
        $i=0;
	while($resultset->next()){
        $liste[$i] = $resultset->getString('liste');
	$i++;
	}
        return $liste; 
      }
function getListTypeContrat()
      {
	$connection = Propel::getConnection();
	$query = 'SELECT listtypecontrat AS liste FROM typeContrat';
	$statement = $connection->prepareStatement($query);
	$resultset = $statement->executeQuery();
        $i=0;
	while($resultset->next()){
        $liste[$i] = $resultset->getString('liste');
	$i++;
	}
        return $liste;
        
      }
function getListTrancheSalaire()
      {
	$connection = Propel::getConnection();
	$query = 'SELECT listtranchesalaire AS liste FROM trancheSalaire';
	$statement = $connection->prepareStatement($query);
	$resultset = $statement->executeQuery();
        $i=0;
	while($resultset->next()){
        $liste[$i] = $resultset->getString('liste');
	$i++;
	}
        return $liste;
        
      }

    function getLastCreatedDossier()
      {
	$connection = Propel::getConnection();
	$query = 'SELECT MAX(id) AS max FROM dossier';
	$statement = $connection->prepareStatement($query);
	$resultset = $statement->executeQuery();
	$resultset->next();
	$max = $resultset->getInt('max');
        
        return $max;
      }
      function getIdPersonne($nom,$prenom)
      {
	$connection = Propel::getConnection();
	$query = 'SELECT id AS idPersonne FROM personne WHERE nom=? AND prenom=?';
	$statement = $connection->prepareStatement($query);
        $statement->setString(1, $nom);
        $statement->setString(2, $prenom);
	$resultset = $statement->executeQuery();
	$resultset->next();
	$idPersonne = $resultset->getString('idPersonne');
        
        return $idPersonne;
      }

      function getIdFinDossier($idDossier)
      {
	$connection = Propel::getConnection();
	$query = 'SELECT id AS idFinDossier FROM finDossier WHERE dossier_id=? ';
	$statement = $connection->prepareStatement($query);
        $statement->setString(1,$idDossier);
	$resultset = $statement->executeQuery();
        if($resultset->getRecordCount()!=1){
	     return -1;
        }
        else{
             $resultset->next();
	     $idFinDossier = $resultset->getInt('idFinDossier');
             return $idFinDossier;
        }
        
      }

      function getSexeTraduit($NumSexe)
      {
        switch($NumSexe){
          case 0: return '';break;
          case 1: return 'masculin';break; 
          case 2: return 'feminin';break; 
        }
      }
      function getTrancheAgeTraduit($NumTrancheAge)
      {
        switch($NumTrancheAge){
          case 0: return '';break;
          case 1: return '18-20';break; 
          case 2: return '21-25';break; 
          case 3: return '26-30';break;
        }
      }
      function getStatutTraduit($NumStatut)
      {
        switch($NumStatut){
          case 0: return '';break;
          case 1: return 'c&eacute;libataire';break; 
          case 2: return 'en couple';break;   
        }
      }
      function getEnfantsTraduit($NumEnfants)
      {
        switch($NumEnfants){
          case 0: return '';break;
          case 1: return 'oui';break;  
          case 2: return 'non';break;  
        }
      }

}

