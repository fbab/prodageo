<?php

/**
 * listerequetes actions.
 *
 * @package    cllajinet
 * @subpackage listerequetes
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 8507 2008-04-17 17:32:20Z fabien $
 */
class listerequetesActions extends sfActions
{
  public function executeIndex()
  {
    $this->listerequetesList = ListerequetesPeer::doSelect(new Criteria());
  }

  public function executeShow($request)
  {
    $this->listerequetes = ListerequetesPeer::retrieveByPk($request->getParameter('id'));
    $this->forward404Unless($this->listerequetes);
  }

  public function executeCreate()
  {
    $this->form = new ListerequetesForm();

    $this->setTemplate('edit');
  }

  public function executeEdit($request)
  {
    $this->form = new ListerequetesForm(ListerequetesPeer::retrieveByPk($request->getParameter('id')));
  }

  public function executeUpdate($request)
  {
    $this->forward404Unless($request->isMethod('post'));

    $this->form = new ListerequetesForm(ListerequetesPeer::retrieveByPk($request->getParameter('id')));

    $this->form->bind($request->getParameter('listerequetes'));
    if ($this->form->isValid())
    {
      $listerequetes = $this->form->save();

      $this->redirect('listerequetes/edit?id='.$listerequetes->getId());
    }

    $this->setTemplate('edit');
  }

  public function executeDelete($request)
  {
    $this->forward404Unless($listerequetes = ListerequetesPeer::retrieveByPk($request->getParameter('id')));

    $listerequetes->delete();

    $this->redirect('listerequetes/index');
  }
}
