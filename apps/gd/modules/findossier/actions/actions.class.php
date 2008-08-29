<?php

/**
 * findossier actions.
 *
 * @package    cllajinet
 * @subpackage findossier
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 8507 2008-04-17 17:32:20Z fabien $
 */
class findossierActions extends sfActions
{
  public function executeIndex()
  {
    $this->findossierList = FindossierPeer::doSelect(new Criteria());
  }

  public function executeShow($request)
  {
    $this->findossier = FindossierPeer::retrieveByPk($request->getParameter('id'));
    $this->forward404Unless($this->findossier);
  }

  public function executeCreate()
  {
    $this->form = new FindossierForm();


    $this->form->setDefault('dossier_id', $this->getRequestParameter('dossier_id'));
  }

  public function executeEdit($request)
  {
    $this->form = new FindossierForm(FindossierPeer::retrieveByPk($request->getParameter('id')));
  }

  public function executeUpdate($request)
  {
    $this->forward404Unless($request->isMethod('post'));

    $this->form = new FindossierForm(FindossierPeer::retrieveByPk($request->getParameter('id')));
    $tab=$request->getPostParameters();
    $this->form->bind($request->getParameter('findossier'));
    if ($this->form->isValid())
    {
      $findossier = $this->form->save();
      $var1=$this->getRequest();
      $tab=$var1->getPostParameters();
      if(array_key_exists("poursuivreFinDossier",$tab)){$this->redirect('findossier/edit?id='.$findossier->getId());}
      elseif(array_key_exists("terminer",$tab)){$this->redirect('findossier/terminer?id='.$findossier->getId());}
      else{$this->redirect('findossier/index');}      
    }

    $this->setTemplate('edit');
  }

  public function executeDelete($request)
  {
    $this->forward404Unless($findossier = FindossierPeer::retrieveByPk($request->getParameter('id')));

    $findossier->delete();

    $this->redirect('findossier/index');
  }

  public function executeTerminer($request)
  {
    $this->form = new FindossierForm(FindossierPeer::retrieveByPk($request->getParameter('id')));

  }
}
