<?php

/**
 * Dossier form.
 *
 * @package    form
 * @subpackage dossier
 * @version    SVN: $Id: sfPropelFormTemplate.php 6174 2007-11-27 06:22:40Z fabien $
 */
class DossierForm extends BaseDossierForm
{
  public function configure()
  {
     $this->setDefault('date_ouverture_dossier','now');
  }
}
