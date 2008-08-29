<?php

/**
 * chapitre actions.
 *
 * @package    cllajinet
 * @subpackage chapitre
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 8507 2008-04-17 17:32:20Z fabien $
 */
class chapitreActions extends sfActions
{
  public function executeIndex()
  {
    $this->chapitreList = ChapitrePeer::doSelect(new Criteria());
  }

  public function executeShow($request)
  {
    $this->chapitre = ChapitrePeer::retrieveByPk($request->getParameter('id'));
    $this->forward404Unless($this->chapitre);
  }

  public function executeCreate()
  {
    $this->form = new ChapitreForm();

    $this->setTemplate('edit');
  }

  public function executeEdit($request)
  {
    $this->form = new ChapitreForm(ChapitrePeer::retrieveByPk($request->getParameter('id')));
  }

  public function executeUpdate($request)
  {
    $this->forward404Unless($request->isMethod('post'));

    $this->form = new ChapitreForm(ChapitrePeer::retrieveByPk($request->getParameter('id')));

    $this->form->bind($request->getParameter('chapitre'));
    if ($this->form->isValid())
    {
      $chapitre = $this->form->save();

      $this->redirect('chapitre/edit?id='.$chapitre->getId());
    }

    $this->setTemplate('edit');
  }

  public function executeDelete($request)
  {
    $this->forward404Unless($chapitre = ChapitrePeer::retrieveByPk($request->getParameter('id')));

    $chapitre->delete();

    $this->redirect('chapitre/index');
  }
}
