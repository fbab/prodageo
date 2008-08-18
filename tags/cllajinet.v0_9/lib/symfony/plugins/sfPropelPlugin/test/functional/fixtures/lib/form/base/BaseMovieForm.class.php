<?php

/**
 * Movie form base class.
 *
 * @package    form
 * @subpackage movie
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 8807 2008-05-06 14:12:28Z fabien $
 */
class BaseMovieForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'       => new sfWidgetFormInputHidden(),
      'director' => new sfWidgetFormInput(),
    ));

    $this->setValidators(array(
      'id'       => new sfValidatorPropelChoice(array('model' => 'Movie', 'column' => 'id', 'required' => false)),
      'director' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('movie[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Movie';
  }

  public function getI18nModelName()
  {
    return 'MovieI18n';
  }

  public function getI18nFormClass()
  {
    return 'MovieI18nForm';
  }

}
