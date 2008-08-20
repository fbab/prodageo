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
	$resultset->next();
	$idFinDossier = $resultset->getString('idFinDossier');
        
        return $idFinDossier;
      }

}
