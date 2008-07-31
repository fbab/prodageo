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
function getTypePropHLM()
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
function getTypePropPrive()
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
function getTypePropHebTemp()
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
function getNomBailleursHLM()
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
function getNomFJT()
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
function getNomCHRS()
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
function getConditionsAcces()
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
function getNomLocapass()
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
function getTypeLogements()
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
