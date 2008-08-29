<?php

/**
 * Subclass for representing a row from the 'statTableau' table.
 *
 * 
 *
 * @package lib.model
 */ 
class Stattableau extends BaseStattableau
{
      function __toString()
      {
      	return $this->id;
      }
}
