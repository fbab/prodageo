<?php

/**
 * Chapitre form base class.
 *
 * @package    form
 * @subpackage chapitre
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 8807 2008-05-06 14:12:28Z fabien $
 */
class BaseChapitreForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'              => new sfWidgetFormInputHidden(),
      'anneecreation'   => new sfWidgetFormSelect(array('choices' => range(date('Y') - 5, date('Y') + 5))),
      'anneesupression' => new sfWidgetFormSelect(array('choices' => range(date('Y') - 5, date('Y') + 5))),
      'titrechapitre'   => new sfWidgetFormInput(),
    ));

    $this->setValidators(array(
      'id'              => new sfValidatorPropelChoice(array('model' => 'Chapitre', 'column' => 'id', 'required' => false)),
      'anneecreation'   => new sfValidatorInteger(array('required' => false)),
      'anneesupression' => new sfValidatorInteger(array('required' => false)),
      'titrechapitre'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('chapitre[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Chapitre';
  }


}
