<?php

/**
 * typelogement actions.
 *
 * @package    cllajinet
 * @subpackage typelogement
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 8507 2008-04-17 17:32:20Z fabien $
 */
class typelogementActions extends sfActions
{
  public function executeIndex()
  {
    $this->typelogementList = TypelogementPeer::doSelect(new Criteria());
  }

  public function executeShow($request)
  {
    $this->typelogement = TypelogementPeer::retrieveByPk($request->getParameter('id'));
    $this->forward404Unless($this->typelogement);
  }

  public function executeCreate()
  {
    $this->form = new TypelogementForm();

    $this->setTemplate('edit');
  }

  public function executeEdit($request)
  {
    $this->form = new TypelogementForm(TypelogementPeer::retrieveByPk($request->getParameter('id')));
  }

  public function executeUpdate($request)
  {
    $this->forward404Unless($request->isMethod('post'));

    $this->form = new TypelogementForm(TypelogementPeer::retrieveByPk($request->getParameter('id')));

    $this->form->bind($request->getParameter('typelogement'));
    if ($this->form->isValid())
    {
      $typelogement = $this->form->save();

      $this->redirect('typelogement/edit?id='.$typelogement->getId());
    }

    $this->setTemplate('edit');
  }

  public function executeDelete($request)
  {
    $this->forward404Unless($typelogement = TypelogementPeer::retrieveByPk($request->getParameter('id')));

    $typelogement->delete();

    $this->redirect('typelogement/index');
  }
}
