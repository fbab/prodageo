<?php

/**
 * stattableau actions.
 *
 * @package    cllajinet
 * @subpackage stattableau
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 8507 2008-04-17 17:32:20Z fabien $
 */
class stattableauActions extends sfActions
{
  public function executeIndex()
  {
    $this->stattableauList = StattableauPeer::doSelect(new Criteria());
  }

  public function executeShow($request)
  {
    $this->stattableau = StattableauPeer::retrieveByPk($request->getParameter('id'));
    $this->forward404Unless($this->stattableau);
  }

  public function executeCreate()
  {
    $this->form = new StattableauForm();

    $this->setTemplate('edit');
  }

  public function executeEdit($request)
  {
    $this->form = new StattableauForm(StattableauPeer::retrieveByPk($request->getParameter('id')));
  }

  public function executeUpdate($request)
  {
    $this->forward404Unless($request->isMethod('post'));

    $this->form = new StattableauForm(StattableauPeer::retrieveByPk($request->getParameter('id')));

    $this->form->bind($request->getParameter('stattableau'));
    if ($this->form->isValid())
    {
      $stattableau = $this->form->save();

      $this->redirect('stattableau/edit?id='.$stattableau->getId());
    }

    $this->setTemplate('edit');
  }

  public function executeDelete($request)
  {
    $this->forward404Unless($stattableau = StattableauPeer::retrieveByPk($request->getParameter('id')));

    $stattableau->delete();

    $this->redirect('stattableau/index');
  }
}
