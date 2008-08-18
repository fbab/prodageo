<?php

/**
 * Dossier form base class.
 *
 * @package    form
 * @subpackage dossier
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 8807 2008-05-06 14:12:28Z fabien $
 */
class BaseDossierForm extends BaseFormPropel
{
  protected static $typeDossier = array('Personne Seule','Couple','Colocation');
  public function setup()
  {
    $dossier=$this->getObject();

    $years=range(date('Y') - 35, date('Y'));
    $date=new sfWidgetFormDate(array('format'=>'%day%/%month%/%year%','years'=>$years));
    $date->addOption('years', array_combine($years, $years));
 
    if($dossier->isNew()){
    $this->setWidgets(array(
      'id'                     => new sfWidgetFormInputHidden(),
      'date_ouverture_dossier' => $date,
      'date_cloture_dossier'   => new sfWidgetFormInputHidden(),
      'type_dossier'           => new sfWidgetFormSelectRadio(array('choices' => self::$typeDossier)),
    ));}
    else{
$this->setWidgets(array(
      'id'                     => new sfWidgetFormInputHidden(),
      'date_ouverture_dossier' => new sfWidgetFormInputHidden(),
      'date_cloture_dossier'   => new sfWidgetFormDate(),
      'type_dossier'           => new sfWidgetFormInputHidden(),
    ));
    }

    $this->setValidators(array(
      'id'                     => new sfValidatorPropelChoice(array('model' => 'Dossier', 'column' => 'id', 'required' => false)),
      'date_ouverture_dossier' => new sfValidatorDate(array('required' => false)),
      'date_cloture_dossier'   => new sfValidatorDate(array('required' => false)),
      'type_dossier'           => new sfValidatorString(array('max_length' => 255, 'required' => true)),
    ));

    $this->widgetSchema->setNameFormat('dossier[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Dossier';
  }


}
