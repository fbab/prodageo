<?php

/**
 * Nombailleurshlm form base class.
 *
 * @package    form
 * @subpackage nombailleurshlm
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 8807 2008-05-06 14:12:28Z fabien $
 */
class BaseNombailleurshlmForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                  => new sfWidgetFormInputHidden(),
      'listnombailleurshlm' => new sfWidgetFormInput(),
    ));

    $this->setValidators(array(
      'id'                  => new sfValidatorPropelChoice(array('model' => 'Nombailleurshlm', 'column' => 'id', 'required' => false)),
      'listnombailleurshlm' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('nombailleurshlm[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Nombailleurshlm';
  }


}
