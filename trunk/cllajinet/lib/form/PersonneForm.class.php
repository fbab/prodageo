<?php

/**
 * Personne form.
 *
 * @package    form
 * @subpackage personne
 * @version    SVN: $Id: sfPropelFormTemplate.php 6174 2007-11-27 06:22:40Z fabien $
 */
require ('/var/www/cllajinet/lib/model/Personne.php');
class PersonneForm extends BasePersonneForm
{

  public function configure()
  {
     $personne = $this->getObject();
     $maxi=$personne->getLastCreatedDossier();
     $this->setDefault('dossier_id',$maxi);
  }
}
