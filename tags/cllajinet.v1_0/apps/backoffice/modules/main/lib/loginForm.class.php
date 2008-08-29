<?php
class loginForm extends sfForm
{
  public function configure()
  {
    $this->getValidatorSchema()->setPostValidator(new loginValidator());

    $this->setWidgets(array(
      'login'      => new sfWidgetFormInput(),
      'password'   => new sfWidgetFormInputPassword(),
    ));

    $this->setValidators(array(
      'login'      => new sfValidatorString(
        array(
          'required' => true,
          'trim' => true
        ),
        array(
          'required' => 'Veuillez rentrer un identifiant',
        )),
      'password'   => new sfValidatorString(
        array(
          'required' => true,
          'trim' => true
        ),
        array(
          'required' => 'Veuillez rentrer un mot de passe'
        )),
    ));
    $this->widgetSchema->setNameFormat('login[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);
  }
} 

