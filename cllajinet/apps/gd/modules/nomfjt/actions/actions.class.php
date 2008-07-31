<?php

/**
 * nomfjt actions.
 *
 * @package    cllajinet
 * @subpackage nomfjt
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 8507 2008-04-17 17:32:20Z fabien $
 */
class nomfjtActions extends sfActions
{
  public function executeIndex()
  {
    $this->nomfjtList = NomfjtPeer::doSelect(new Criteria());
  }

  public function executeShow($request)
  {
    $this->nomfjt = NomfjtPeer::retrieveByPk($request->getParameter('id'));
    $this->forward404Unless($this->nomfjt);
  }

  public function executeCreate()
  {
    $this->form = new NomfjtForm();

    $this->setTemplate('edit');
  }

  public function executeEdit($request)
  {
    $this->form = new NomfjtForm(NomfjtPeer::retrieveByPk($request->getParameter('id')));
  }

  public function executeUpdate($request)
  {
    $this->forward404Unless($request->isMethod('post'));

    $this->form = new NomfjtForm(NomfjtPeer::retrieveByPk($request->getParameter('id')));

    $this->form->bind($request->getParameter('nomfjt'));
    if ($this->form->isValid())
    {
      $nomfjt = $this->form->save();

      $this->redirect('nomfjt/edit?id='.$nomfjt->getId());
    }

    $this->setTemplate('edit');
  }

  public function executeDelete($request)
  {
    $this->forward404Unless($nomfjt = NomfjtPeer::retrieveByPk($request->getParameter('id')));

    $nomfjt->delete();

    $this->redirect('nomfjt/index');
  }
}
