<?php

/**
 * Subclass for representing a row from the 'dossier' table.
 *
 * 
 *
 * @package lib.model
 */ 
class Dossier extends BaseDossier
{
      function __toString()
      {
      	return $this->id;
      }
      function getNumLastDossier()
      {
	$connection = Propel::getConnection();
	$query = 'SELECT MAX(id) AS max FROM dossier';
	$statement = $connection->prepareStatement($query);
	$resultset = $statement->executeQuery();
	$resultset->next();
	$max = $resultset->getInt('max');
        
        return $max+1;
      }

      function getTypeDossierTraduit($TypeDossier)
      {
        switch($TypeDossier){
          case 0: return 'Personne seule';break;
          case 1: return 'Couple';break;  
          case 2: return 'Colocation';break;  
        }
      }

}
