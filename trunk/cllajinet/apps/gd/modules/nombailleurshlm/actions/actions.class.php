<?php

/**
 * nombailleurshlm actions.
 *
 * @package    cllajinet
 * @subpackage nombailleurshlm
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 8507 2008-04-17 17:32:20Z fabien $
 */
class nombailleurshlmActions extends sfActions
{
  public function executeIndex()
  {
    $this->nombailleurshlmList = NombailleurshlmPeer::doSelect(new Criteria());
  }

  public function executeShow($request)
  {
    $this->nombailleurshlm = NombailleurshlmPeer::retrieveByPk($request->getParameter('id'));
    $this->forward404Unless($this->nombailleurshlm);
  }

  public function executeCreate()
  {
    $this->form = new NombailleurshlmForm();

    $this->setTemplate('edit');
  }

  public function executeEdit($request)
  {
    $this->form = new NombailleurshlmForm(NombailleurshlmPeer::retrieveByPk($request->getParameter('id')));
  }

  public function executeUpdate($request)
  {
    $this->forward404Unless($request->isMethod('post'));

    $this->form = new NombailleurshlmForm(NombailleurshlmPeer::retrieveByPk($request->getParameter('id')));

    $this->form->bind($request->getParameter('nombailleurshlm'));
    if ($this->form->isValid())
    {
      $nombailleurshlm = $this->form->save();

      $this->redirect('nombailleurshlm/edit?id='.$nombailleurshlm->getId());
    }

    $this->setTemplate('edit');
  }

  public function executeDelete($request)
  {
    $this->forward404Unless($nombailleurshlm = NombailleurshlmPeer::retrieveByPk($request->getParameter('id')));

    $nombailleurshlm->delete();

    $this->redirect('nombailleurshlm/index');
  }
}
