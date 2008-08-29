<?php

/**
 * nationalite actions.
 *
 * @package    cllajinet
 * @subpackage nationalite
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 8507 2008-04-17 17:32:20Z fabien $
 */
class nationaliteActions extends sfActions
{
  public function executeIndex()
  {
    $this->nationaliteList = NationalitePeer::doSelect(new Criteria());
  }

  public function executeShow($request)
  {
    $this->nationalite = NationalitePeer::retrieveByPk($request->getParameter('id'));
    $this->forward404Unless($this->nationalite);
  }

  public function executeCreate()
  {
    $this->form = new NationaliteForm();

    $this->setTemplate('edit');
  }

  public function executeEdit($request)
  {
    $this->form = new NationaliteForm(NationalitePeer::retrieveByPk($request->getParameter('id')));
  }

  public function executeUpdate($request)
  {
    $this->forward404Unless($request->isMethod('post'));

    $this->form = new NationaliteForm(NationalitePeer::retrieveByPk($request->getParameter('id')));

    $this->form->bind($request->getParameter('nationalite'));
    if ($this->form->isValid())
    {
      $nationalite = $this->form->save();

      $this->redirect('nationalite/edit?id='.$nationalite->getId());
    }

    $this->setTemplate('edit');
  }

  public function executeDelete($request)
  {
    $this->forward404Unless($nationalite = NationalitePeer::retrieveByPk($request->getParameter('id')));

    $nationalite->delete();

    $this->redirect('nationalite/index');
  }
}
