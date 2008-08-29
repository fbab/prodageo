<?php

/**
 * nomlocapass actions.
 *
 * @package    cllajinet
 * @subpackage nomlocapass
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 8507 2008-04-17 17:32:20Z fabien $
 */
class nomlocapassActions extends sfActions
{
  public function executeIndex()
  {
    $this->nomlocapassList = NomlocapassPeer::doSelect(new Criteria());
  }

  public function executeShow($request)
  {
    $this->nomlocapass = NomlocapassPeer::retrieveByPk($request->getParameter('id'));
    $this->forward404Unless($this->nomlocapass);
  }

  public function executeCreate()
  {
    $this->form = new NomlocapassForm();

    $this->setTemplate('edit');
  }

  public function executeEdit($request)
  {
    $this->form = new NomlocapassForm(NomlocapassPeer::retrieveByPk($request->getParameter('id')));
  }

  public function executeUpdate($request)
  {
    $this->forward404Unless($request->isMethod('post'));

    $this->form = new NomlocapassForm(NomlocapassPeer::retrieveByPk($request->getParameter('id')));

    $this->form->bind($request->getParameter('nomlocapass'));
    if ($this->form->isValid())
    {
      $nomlocapass = $this->form->save();

      $this->redirect('nomlocapass/edit?id='.$nomlocapass->getId());
    }

    $this->setTemplate('edit');
  }

  public function executeDelete($request)
  {
    $this->forward404Unless($nomlocapass = NomlocapassPeer::retrieveByPk($request->getParameter('id')));

    $nomlocapass->delete();

    $this->redirect('nomlocapass/index');
  }
}
