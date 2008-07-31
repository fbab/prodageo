<?php

/**
 * typeparc actions.
 *
 * @package    cllajinet
 * @subpackage typeparc
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 8507 2008-04-17 17:32:20Z fabien $
 */
class typeparcActions extends sfActions
{
  public function executeIndex()
  {
    $this->typeparcList = TypeparcPeer::doSelect(new Criteria());
  }

  public function executeShow($request)
  {
    $this->typeparc = TypeparcPeer::retrieveByPk($request->getParameter('id'));
    $this->forward404Unless($this->typeparc);
  }

  public function executeCreate()
  {
    $this->form = new TypeparcForm();

    $this->setTemplate('edit');
  }

  public function executeEdit($request)
  {
    $this->form = new TypeparcForm(TypeparcPeer::retrieveByPk($request->getParameter('id')));
  }

  public function executeUpdate($request)
  {
    $this->forward404Unless($request->isMethod('post'));

    $this->form = new TypeparcForm(TypeparcPeer::retrieveByPk($request->getParameter('id')));

    $this->form->bind($request->getParameter('typeparc'));
    if ($this->form->isValid())
    {
      $typeparc = $this->form->save();

      $this->redirect('typeparc/edit?id='.$typeparc->getId());
    }

    $this->setTemplate('edit');
  }

  public function executeDelete($request)
  {
    $this->forward404Unless($typeparc = TypeparcPeer::retrieveByPk($request->getParameter('id')));

    $typeparc->delete();

    $this->redirect('typeparc/index');
  }
}
