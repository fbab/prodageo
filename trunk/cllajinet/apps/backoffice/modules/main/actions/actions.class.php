<?php

/**
 * main actions.
 *
 * @package    cllajinet
 * @subpackage main
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 9301 2008-05-27 01:08:46Z dwhittle $
 */
class mainActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex($request)
  {

  }

  public function executeLogin()
  {
    sfForm::disableCSRFProtection();
    $this->login_form = new loginForm();

    if ($this->getRequest()->getMethod() != sfRequest::POST)
    {
      return sfView::SUCCESS;
      $this->redirect('http://192.168.0.3/cllajinet/web/gd_dev.php/choixAction');
    }
    
    $this->login_form->bind($this->getRequestParameter('login'));

    if (!$this->login_form->isValid())
    {
      return sfView::SUCCESS;

    }
     
    $login = $this->login_form->getValue('login');
    echo $login;

    $sf_user = $this->getUser();
    $sf_user->setAuthenticated(true);
    /*$sf_user->setAttribute('id', $user->getId());
    if ($user->getIsAdmin())
    {*/
      $sf_user->addCredentials('admin');
    //}

    //http://192.168.0.3/cllajinet/web/gd_dev.php/choixAction
  }
}
