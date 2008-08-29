<?php

/**
 * Listerequetes form base class.
 *
 * @package    form
 * @subpackage listerequetes
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 8807 2008-05-06 14:12:28Z fabien $
 */
class BaseListerequetesForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'            => new sfWidgetFormInputHidden(),
      'listrequetes'  => new sfWidgetFormTextarea(),
      'titrerequetes' => new sfWidgetFormInput(),
      'ordrerequetes' => new sfWidgetFormInput(),
      'chapitre_id'   => new sfWidgetFormPropelSelect(array('model' => 'Chapitre', 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id'            => new sfValidatorPropelChoice(array('model' => 'Listerequetes', 'column' => 'id', 'required' => false)),
      'listrequetes'  => new sfValidatorString(array('required' => false)),
      'titrerequetes' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'ordrerequetes' => new sfValidatorInteger(array('required' => false)),
      'chapitre_id'   => new sfValidatorPropelChoice(array('model' => 'Chapitre', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('listerequetes[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Listerequetes';
  }


}
