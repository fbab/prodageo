<?php

/**
 * ville actions.
 *
 * @package    cllajinet
 * @subpackage ville
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 8507 2008-04-17 17:32:20Z fabien $
 */
class villeActions extends sfActions
{
  public function executeIndex()
  {
    $this->villeList = VillePeer::doSelect(new Criteria());
  }

  public function executeShow($request)
  {
    $this->ville = VillePeer::retrieveByPk($request->getParameter('id'));
    $this->forward404Unless($this->ville);
  }

  public function executeCreate()
  {
    $this->form = new VilleForm();

    $this->setTemplate('edit');
  }

  public function executeEdit($request)
  {
    $this->form = new VilleForm(VillePeer::retrieveByPk($request->getParameter('id')));
  }

  public function executeUpdate($request)
  {
    $this->forward404Unless($request->isMethod('post'));

    $this->form = new VilleForm(VillePeer::retrieveByPk($request->getParameter('id')));

    $this->form->bind($request->getParameter('ville'));
    if ($this->form->isValid())
    {
      $ville = $this->form->save();

      $this->redirect('ville/edit?id='.$ville->getId());
    }

    $this->setTemplate('edit');
  }

  public function executeDelete($request)
  {
    $this->forward404Unless($ville = VillePeer::retrieveByPk($request->getParameter('id')));

    $ville->delete();

    $this->redirect('ville/index');
  }
}
