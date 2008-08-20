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

    $years=range(date('Y') - 5, date('Y') + 5);
    $dateOuverture=new sfWidgetFormDate(array('format'=>'%day%/%month%/%year%','years'=>$years));
    $dateFermeture=new sfWidgetFormDate(array('format'=>'%day%/%month%/%year%','years'=>$years));
    $dateOuverture->addOption('years', array_combine($years, $years));
    $dateFermeture->addOption('years', array_combine($years, $years));
 
    if($dossier->isNew()){
    $this->setWidgets(array(
      'id'                     => new sfWidgetFormInputHidden(),
      'etat'                   => new sfWidgetFormInputHidden(),
      'date_ouverture_dossier' => $dateOuverture,
      'date_cloture_dossier'   => new sfWidgetFormInputHidden(),
      'type_dossier'           => new sfWidgetFormSelectRadio(array('choices' => self::$typeDossier)),
    ));}
    elseif($dossier->getDateClotureDossier() == null){
    $this->setWidgets(array(
      'id'                     => new sfWidgetFormInputHidden(),
      'etat'                   => new sfWidgetFormInputHidden(),
      'date_ouverture_dossier' => new sfWidgetFormInputHidden(),
      'date_cloture_dossier'   => $dateFermeture,
      'type_dossier'           => new sfWidgetFormInputHidden(),
    ));
    }
    else{
     $this->setWidgets(array(
      'id'                     => new sfWidgetFormInputHidden(),
      'etat'                   => new sfWidgetFormInputHidden(),
      'date_ouverture_dossier' => new sfWidgetFormInputHidden(),
      'date_cloture_dossier'   => new sfWidgetFormInputHidden(),
      'type_dossier'           => new sfWidgetFormInputHidden(),
    ));
    }

    $this->setValidators(array(
      'id'                     => new sfValidatorPropelChoice(array('model' => 'Dossier', 'column' => 'id', 'required' => false)),
      'etat'                   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'date_ouverture_dossier' => new sfValidatorDate(array('required' => false)),
      'date_cloture_dossier'   => new sfValidatorDate(array('required' => false)),
      'type_dossier'           => new sfValidatorString(array('max_length' => 255, 'required' => true)),
    ));

    if($dossier->getDateClotureDossier() != null){
        $this->validatorSchema->setPostValidator(new sfValidatorSchemaCompare('date_ouverture_dossier',  
'self::LESS_THAN_EQUAL','date_cloture_dossier', array(),array('invalid' => 'la date d\'ouverture du dossier (%left_field%) doit être plus récente que la date de clôture (%right_field%)')));
    }

    $this->widgetSchema->setNameFormat('dossier[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Dossier';
  }


}
