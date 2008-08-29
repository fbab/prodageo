<?php

/**
 * Stattableau form base class.
 *
 * @package    form
 * @subpackage stattableau
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 8807 2008-05-06 14:12:28Z fabien $
 */
class BaseStattableauForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'              => new sfWidgetFormInputHidden(),
      'statistiques_id' => new sfWidgetFormPropelSelect(array('model' => 'Statistiques', 'add_empty' => true)),
      'nomstat'         => new sfWidgetFormInput(),
      'valeaursid'      => new sfWidgetFormInput(),
      'valeurs'         => new sfWidgetFormInput(),
    ));

    $this->setValidators(array(
      'id'              => new sfValidatorPropelChoice(array('model' => 'Stattableau', 'column' => 'id', 'required' => false)),
      'statistiques_id' => new sfValidatorPropelChoice(array('model' => 'Statistiques', 'column' => 'id', 'required' => false)),
      'nomstat'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'valeaursid'      => new sfValidatorInteger(array('required' => false)),
      'valeurs'         => new sfValidatorNumber(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('stattableau[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Stattableau';
  }


}
