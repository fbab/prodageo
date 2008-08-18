<?php

/**
 * typeproprietaireprive actions.
 *
 * @package    cllajinet
 * @subpackage typeproprietaireprive
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 8507 2008-04-17 17:32:20Z fabien $
 */
class typeproprietairepriveActions extends sfActions
{
  public function executeIndex()
  {
    $this->typeproprietairepriveList = TypeproprietaireprivePeer::doSelect(new Criteria());
  }

  public function executeShow($request)
  {
    $this->typeproprietaireprive = TypeproprietaireprivePeer::retrieveByPk($request->getParameter('id'));
    $this->forward404Unless($this->typeproprietaireprive);
  }

  public function executeCreate()
  {
    $this->form = new TypeproprietairepriveForm();

    $this->setTemplate('edit');
  }

  public function executeEdit($request)
  {
    $this->form = new TypeproprietairepriveForm(TypeproprietaireprivePeer::retrieveByPk($request->getParameter('id')));
  }

  public function executeUpdate($request)
  {
    $this->forward404Unless($request->isMethod('post'));

    $this->form = new TypeproprietairepriveForm(TypeproprietaireprivePeer::retrieveByPk($request->getParameter('id')));

    $this->form->bind($request->getParameter('typeproprietaireprive'));
    if ($this->form->isValid())
    {
      $typeproprietaireprive = $this->form->save();

      $this->redirect('typeproprietaireprive/edit?id='.$typeproprietaireprive->getId());
    }

    $this->setTemplate('edit');
  }

  public function executeDelete($request)
  {
    $this->forward404Unless($typeproprietaireprive = TypeproprietaireprivePeer::retrieveByPk($request->getParameter('id')));

    $typeproprietaireprive->delete();

    $this->redirect('typeproprietaireprive/index');
  }
}
