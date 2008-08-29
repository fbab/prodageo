<?php

/**
 * tranchesalaire actions.
 *
 * @package    cllajinet
 * @subpackage tranchesalaire
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 8507 2008-04-17 17:32:20Z fabien $
 */
class tranchesalaireActions extends sfActions
{
  public function executeIndex()
  {
    $this->tranchesalaireList = TranchesalairePeer::doSelect(new Criteria());
  }

  public function executeShow($request)
  {
    $this->tranchesalaire = TranchesalairePeer::retrieveByPk($request->getParameter('id'));
    $this->forward404Unless($this->tranchesalaire);
  }

  public function executeCreate()
  {
    $this->form = new TranchesalaireForm();

    $this->setTemplate('edit');
  }

  public function executeEdit($request)
  {
    $this->form = new TranchesalaireForm(TranchesalairePeer::retrieveByPk($request->getParameter('id')));
  }

  public function executeUpdate($request)
  {
    $this->forward404Unless($request->isMethod('post'));

    $this->form = new TranchesalaireForm(TranchesalairePeer::retrieveByPk($request->getParameter('id')));

    $this->form->bind($request->getParameter('tranchesalaire'));
    if ($this->form->isValid())
    {
      $tranchesalaire = $this->form->save();

      $this->redirect('tranchesalaire/edit?id='.$tranchesalaire->getId());
    }

    $this->setTemplate('edit');
  }

  public function executeDelete($request)
  {
    $this->forward404Unless($tranchesalaire = TranchesalairePeer::retrieveByPk($request->getParameter('id')));

    $tranchesalaire->delete();

    $this->redirect('tranchesalaire/index');
  }
}
