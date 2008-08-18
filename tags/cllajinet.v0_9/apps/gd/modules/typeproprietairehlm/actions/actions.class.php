<?php

/**
 * typeproprietairehlm actions.
 *
 * @package    cllajinet
 * @subpackage typeproprietairehlm
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 8507 2008-04-17 17:32:20Z fabien $
 */
class typeproprietairehlmActions extends sfActions
{
  public function executeIndex()
  {
    $this->typeproprietairehlmList = TypeproprietairehlmPeer::doSelect(new Criteria());
  }

  public function executeShow($request)
  {
    $this->typeproprietairehlm = TypeproprietairehlmPeer::retrieveByPk($request->getParameter('id'));
    $this->forward404Unless($this->typeproprietairehlm);
  }

  public function executeCreate()
  {
    $this->form = new TypeproprietairehlmForm();

    $this->setTemplate('edit');
  }

  public function executeEdit($request)
  {
    $this->form = new TypeproprietairehlmForm(TypeproprietairehlmPeer::retrieveByPk($request->getParameter('id')));
  }

  public function executeUpdate($request)
  {
    $this->forward404Unless($request->isMethod('post'));

    $this->form = new TypeproprietairehlmForm(TypeproprietairehlmPeer::retrieveByPk($request->getParameter('id')));

    $this->form->bind($request->getParameter('typeproprietairehlm'));
    if ($this->form->isValid())
    {
      $typeproprietairehlm = $this->form->save();

      $this->redirect('typeproprietairehlm/edit?id='.$typeproprietairehlm->getId());
    }

    $this->setTemplate('edit');
  }

  public function executeDelete($request)
  {
    $this->forward404Unless($typeproprietairehlm = TypeproprietairehlmPeer::retrieveByPk($request->getParameter('id')));

    $typeproprietairehlm->delete();

    $this->redirect('typeproprietairehlm/index');
  }
}
