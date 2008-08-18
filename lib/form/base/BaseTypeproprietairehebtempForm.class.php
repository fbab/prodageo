<?php

/**
 * Typeproprietairehebtemp form base class.
 *
 * @package    form
 * @subpackage typeproprietairehebtemp
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 8807 2008-05-06 14:12:28Z fabien $
 */
class BaseTypeproprietairehebtempForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                          => new sfWidgetFormInputHidden(),
      'listtypeproprietairehebtemp' => new sfWidgetFormInput(),
    ));

    $this->setValidators(array(
      'id'                          => new sfValidatorPropelChoice(array('model' => 'Typeproprietairehebtemp', 'column' => 'id', 'required' => false)),
      'listtypeproprietairehebtemp' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('typeproprietairehebtemp[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Typeproprietairehebtemp';
  }


}
