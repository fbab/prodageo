<?php

/**
 * Categorielogementactuel form base class.
 *
 * @package    form
 * @subpackage categorielogementactuel
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 8807 2008-05-06 14:12:28Z fabien $
 */
class BaseCategorielogementactuelForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                          => new sfWidgetFormInputHidden(),
      'listcategorielogementactuel' => new sfWidgetFormInput(),
    ));

    $this->setValidators(array(
      'id'                          => new sfValidatorPropelChoice(array('model' => 'Categorielogementactuel', 'column' => 'id', 'required' => false)),
      'listcategorielogementactuel' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('categorielogementactuel[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Categorielogementactuel';
  }


}
