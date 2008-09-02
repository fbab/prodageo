<?php

/**
 * Subclass for representing a row from the 'finDossier' table.
 *
 * 
 *
 * @package lib.model
 */ 
class Findossier extends BaseFindossier
{ 

      function __toString()
      {
      	return $this->id;
      }

function getNomDossier()
	{
		$connection = Propel::getConnection();
		$query = 'SELECT nom AS nom FROM personne WHERE personne.dossier_id = CONVERT ( ' . $this->getDossierId() . ' , CHAR ) ' ; 

	$statement = $connection->prepareStatement($query);
	$resultset = $statement->executeQuery();
        $i=0;
	$nom = "" ;
	while($resultset->next()){
        $nom = $nom + "-" + $resultset->getString('nom');
	}
        return $nom ;
	}

function getVilles()
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

function getParc()
      {
	$connection = Propel::getConnection();
	$query = 'SELECT listtypeparc AS liste FROM typeParc';
	$statement = $connection->prepareStatement($query);
	$resultset = $statement->executeQuery();
        $i=0;
	while($resultset->next()){
        $liste[$i] = $resultset->getString('liste');
	$i++;
	}
        return $liste; 
      }
function getListTypePropHLM()
      {
	$connection = Propel::getConnection();
	$query = 'SELECT listtypeproprietairehlm AS liste FROM typeProprietaireHLM';
	$statement = $connection->prepareStatement($query);
	$resultset = $statement->executeQuery();
        $i=0;
	while($resultset->next()){
        $liste[$i] = $resultset->getString('liste');
	$i++;
	}
        return $liste;  
      }
function getListTypePropPrive()
      {
	$connection = Propel::getConnection();
	$query = 'SELECT listtypeproprietaireprive AS liste FROM typeProprietairePrive';
	$statement = $connection->prepareStatement($query);
	$resultset = $statement->executeQuery();
        $i=0;
	while($resultset->next()){
        $liste[$i] = $resultset->getString('liste');
	$i++;
	}
        return $liste;  
      }
function getListTypePropHebTemp()
      {
	$connection = Propel::getConnection();
	$query = 'SELECT listtypeproprietairehebtemp AS liste FROM typeProprietaireHebTemp';
	$statement = $connection->prepareStatement($query);
	$resultset = $statement->executeQuery();
        $i=0;
	while($resultset->next()){
        $liste[$i] = $resultset->getString('liste');
	$i++;
	}
        return $liste;  
      }
function getListNomBailleursHLM()
      {
	$connection = Propel::getConnection();
	$query = 'SELECT listnombailleurshlm AS liste FROM nomBailleursHLM';
	$statement = $connection->prepareStatement($query);
	$resultset = $statement->executeQuery();
        $i=0;
	while($resultset->next()){
        $liste[$i] = $resultset->getString('liste');
	$i++;
	}
        return $liste;  
      }
function getListNomFJT()
      {
	$connection = Propel::getConnection();
	$query = 'SELECT listnomfjt AS liste FROM nomFJT';
	$statement = $connection->prepareStatement($query);
	$resultset = $statement->executeQuery();
        $i=0;
	while($resultset->next()){
        $liste[$i] = $resultset->getString('liste');
	$i++;
	}
        return $liste;  
      }
function getListNomCHRS()
      {
	$connection = Propel::getConnection();
	$query = 'SELECT listnomchrs AS liste FROM nomCHRS';
	$statement = $connection->prepareStatement($query);
	$resultset = $statement->executeQuery();
        $i=0;
	while($resultset->next()){
        $liste[$i] = $resultset->getString('liste');
	$i++;
	}
        return $liste;  
      }
function getListConditionsAcces()
      {
	$connection = Propel::getConnection();
	$query = 'SELECT listconditionsacces AS liste FROM conditionsAcces';
	$statement = $connection->prepareStatement($query);
	$resultset = $statement->executeQuery();
        $i=0;
	while($resultset->next()){
        $liste[$i] = $resultset->getString('liste');
	$i++;
	}
        return $liste;  
      }
function getListNomLocapass()
      {
	$connection = Propel::getConnection();
	$query = 'SELECT listnomlocapass AS liste FROM nomLocapass';
	$statement = $connection->prepareStatement($query);
	$resultset = $statement->executeQuery();
        $i=0;
	while($resultset->next()){
        $liste[$i] = $resultset->getString('liste');
	$i++;
	}
        return $liste;  
      }
function getListTypeLogements()
      {
	$connection = Propel::getConnection();
	$query = 'SELECT listtypelogement AS liste FROM typeLogement';
	$statement = $connection->prepareStatement($query);
	$resultset = $statement->executeQuery();
        $i=0;
	while($resultset->next()){
        $liste[$i] = $resultset->getString('liste');
	$i++;
	}
        return $liste;  
      }
}
