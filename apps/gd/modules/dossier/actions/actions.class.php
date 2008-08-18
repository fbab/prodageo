<?php

/**
 * dossier actions.
 *
 * @package    cllajinet
 * @subpackage dossier
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 8507 2008-04-17 17:32:20Z fabien $
 */
class dossierActions extends sfActions
{
  public function executeIndex()
  {
    $this->dossierList = DossierPeer::doSelect(new Criteria());
  }

  public function executeShow($request)
  {
    $this->dossier = DossierPeer::retrieveByPk($request->getParameter('id'));
    $this->forward404Unless($this->dossier);
  }

  public function executeCreate()
  {
    $this->form = new DossierForm();

  }

  public function executeEdit($request)
  {
    $this->form = new DossierForm(DossierPeer::retrieveByPk($request->getParameter('id')));
  }

  public function executeUpdate($request)
  {
    $this->forward404Unless($request->isMethod('post'));

    $this->form = new DossierForm(DossierPeer::retrieveByPk($request->getParameter('id')));

    $this->form->bind($request->getParameter('dossier'));
    if ($this->form->isValid())
    {
      $dossier = $this->form->save();

      $this->redirect('dossier/edit?id='.$dossier->getId());
    }

    $this->setTemplate('edit');
  }

  public function executeDelete($request)
  {
    $this->forward404Unless($dossier = DossierPeer::retrieveByPk($request->getParameter('id')));

    $dossier->delete();

    $this->redirect('dossier/index');
  }
}
