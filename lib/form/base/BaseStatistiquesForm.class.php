<?php

/**
 * Statistiques form base class.
 *
 * @package    form
 * @subpackage statistiques
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 8807 2008-05-06 14:12:28Z fabien $
 */
class BaseStatistiquesForm extends BaseFormPropel
{
  public function setup()
  {
    $statistique=$this->getObject();

    $years=range(date('Y') - 5, date('Y') + 5);
    $datestat=new sfWidgetFormDate(array('format'=>'%day%/%month%/%year%','years'=>$years));
    $datestat->addOption('years', array_combine($years, $years));

 

    $this->setWidgets(array(
      'id'                       => new sfWidgetFormInputHidden(),
      'datestat'                 => $datestat,
      'nbmenagesrecu'            => new sfWidgetFormInputHidden(),
      'nbadultesrecu'            => new sfWidgetFormInputHidden(),
      'nbenfantsrecu'            => new sfWidgetFormInputHidden(),
      'nbloges'                  => new sfWidgetFormInputHidden(),
      'nblogesadultes'           => new sfWidgetFormInputHidden(),
      'nblogesenfants'           => new sfWidgetFormInputHidden(),
      'nblogesdirect'            => new sfWidgetFormInputHidden(),
      'nblogesdirectadultes'     => new sfWidgetFormInputHidden(),
      'nblogesdirectenfants'     => new sfWidgetFormInputHidden(),
      'nblogesindirect'          => new sfWidgetFormInputHidden(),
      'nblogesindirectadultes'   => new sfWidgetFormInputHidden(),
      'nblogesindirectenfants'   => new sfWidgetFormInputHidden(),
      'nbaltsousloc'             => new sfWidgetFormInputHidden(),
      'nbaltsouslocadultes'      => new sfWidgetFormInputHidden(),
      'nbaltsouslocenfants'      => new sfWidgetFormInputHidden(),
      'nbencours'                => new sfWidgetFormInputHidden(),
      'nbencoursadultes'         => new sfWidgetFormInputHidden(),
      'nbencoursenfants'         => new sfWidgetFormInputHidden(),
      'nbabandon'                => new sfWidgetFormInputHidden(),
      'nbabandonadultes'         => new sfWidgetFormInputHidden(),
      'nbabandonenfants'         => new sfWidgetFormInputHidden(),
      'sexe'                     => new sfWidgetFormInputHidden(),
      'trancheage'               => new sfWidgetFormInputHidden(),
      'nationalite'              => new sfWidgetFormInputHidden(),
      'situationfamiliale'       => new sfWidgetFormInputHidden(),
      'originedemande'           => new sfWidgetFormInputHidden(),
      'villeresidence'           => new sfWidgetFormInputHidden(),
      'modehebergement'          => new sfWidgetFormInputHidden(),
      'lieutravail'              => new sfWidgetFormInputHidden(),
      'typecontrat'              => new sfWidgetFormInputHidden(),
      'revenus'                  => new sfWidgetFormInputHidden(),
      'sexeloges'                => new sfWidgetFormInputHidden(),
      'trancheageloges'          => new sfWidgetFormInputHidden(),
      'nationaliteloges'         => new sfWidgetFormInputHidden(),
      'situationfamilialeloges'  => new sfWidgetFormInputHidden(),
      'originedemandeloges'      => new sfWidgetFormInputHidden(),
      'villeresidenceloges'      => new sfWidgetFormInputHidden(),
      'modehebergementloges'     => new sfWidgetFormInputHidden(),
      'lieutravailloges'         => new sfWidgetFormInputHidden(),
      'typecontratloges'         => new sfWidgetFormInputHidden(),
      'revenusloges'             => new sfWidgetFormInputHidden(),
      'typelogementtrouveloges'  => new sfWidgetFormInputHidden(),
      'typeproprietaireloges'    => new sfWidgetFormInputHidden(),
      'villelogementtrouveloges' => new sfWidgetFormInputHidden(),
      'nbrecu'                   => new sfWidgetFormInputHidden(),
      'nbabandons'               => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'id'                       => new sfValidatorPropelChoice(array('model' => 'Statistiques', 'column' => 'id', 'required' => false)),
      'datestat'                 => new sfValidatorDate(array('required' => false)),
      'nbmenagesrecu'            => new sfValidatorInteger(array('required' => false)),
      'nbadultesrecu'            => new sfValidatorInteger(array('required' => false)),
      'nbenfantsrecu'            => new sfValidatorInteger(array('required' => false)),
      'nbloges'                  => new sfValidatorInteger(array('required' => false)),
      'nblogesadultes'           => new sfValidatorInteger(array('required' => false)),
      'nblogesenfants'           => new sfValidatorInteger(array('required' => false)),
      'nblogesdirect'            => new sfValidatorInteger(array('required' => false)),
      'nblogesdirectadultes'     => new sfValidatorInteger(array('required' => false)),
      'nblogesdirectenfants'     => new sfValidatorInteger(array('required' => false)),
      'nblogesindirect'          => new sfValidatorInteger(array('required' => false)),
      'nblogesindirectadultes'   => new sfValidatorInteger(array('required' => false)),
      'nblogesindirectenfants'   => new sfValidatorInteger(array('required' => false)),
      'nbaltsousloc'             => new sfValidatorInteger(array('required' => false)),
      'nbaltsouslocadultes'      => new sfValidatorInteger(array('required' => false)),
      'nbaltsouslocenfants'      => new sfValidatorInteger(array('required' => false)),
      'nbencours'                => new sfValidatorInteger(array('required' => false)),
      'nbencoursadultes'         => new sfValidatorInteger(array('required' => false)),
      'nbencoursenfants'         => new sfValidatorInteger(array('required' => false)),
      'nbabandon'                => new sfValidatorInteger(array('required' => false)),
      'nbabandonadultes'         => new sfValidatorInteger(array('required' => false)),
      'nbabandonenfants'         => new sfValidatorInteger(array('required' => false)),
      'sexe'                     => new sfValidatorInteger(array('required' => false)),
      'trancheage'               => new sfValidatorInteger(array('required' => false)),
      'nationalite'              => new sfValidatorInteger(array('required' => false)),
      'situationfamiliale'       => new sfValidatorInteger(array('required' => false)),
      'originedemande'           => new sfValidatorInteger(array('required' => false)),
      'villeresidence'           => new sfValidatorInteger(array('required' => false)),
      'modehebergement'          => new sfValidatorInteger(array('required' => false)),
      'lieutravail'              => new sfValidatorInteger(array('required' => false)),
      'typecontrat'              => new sfValidatorInteger(array('required' => false)),
      'revenus'                  => new sfValidatorInteger(array('required' => false)),
      'sexeloges'                => new sfValidatorInteger(array('required' => false)),
      'trancheageloges'          => new sfValidatorInteger(array('required' => false)),
      'nationaliteloges'         => new sfValidatorInteger(array('required' => false)),
      'situationfamilialeloges'  => new sfValidatorInteger(array('required' => false)),
      'originedemandeloges'      => new sfValidatorInteger(array('required' => false)),
      'villeresidenceloges'      => new sfValidatorInteger(array('required' => false)),
      'modehebergementloges'     => new sfValidatorInteger(array('required' => false)),
      'lieutravailloges'         => new sfValidatorInteger(array('required' => false)),
      'typecontratloges'         => new sfValidatorInteger(array('required' => false)),
      'revenusloges'             => new sfValidatorInteger(array('required' => false)),
      'typelogementtrouveloges'  => new sfValidatorInteger(array('required' => false)),
      'typeproprietaireloges'    => new sfValidatorInteger(array('required' => false)),
      'villelogementtrouveloges' => new sfValidatorInteger(array('required' => false)),
      'nbrecu'                   => new sfValidatorInteger(array('required' => false)),
      'nbabandons'               => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('statistiques[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Statistiques';
  }


}
