<?php

/**
 * Subclass for representing a row from the 'chapitre' table.
 *
 * 
 *
 * @package lib.model
 */ 
class Chapitre extends BaseChapitre
{
    
      function __toString()
      {
      	return $this->id;
      }

}
