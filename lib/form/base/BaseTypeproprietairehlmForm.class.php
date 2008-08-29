<?php

/**
 * Typeproprietairehlm form base class.
 *
 * @package    form
 * @subpackage typeproprietairehlm
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 8807 2008-05-06 14:12:28Z fabien $
 */
class BaseTypeproprietairehlmForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                      => new sfWidgetFormInputHidden(),
      'listtypeproprietairehlm' => new sfWidgetFormInput(),
    ));

    $this->setValidators(array(
      'id'                      => new sfValidatorPropelChoice(array('model' => 'Typeproprietairehlm', 'column' => 'id', 'required' => false)),
      'listtypeproprietairehlm' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('typeproprietairehlm[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Typeproprietairehlm';
  }


}
