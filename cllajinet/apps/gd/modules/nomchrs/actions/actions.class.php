<?php

/**
 * nomchrs actions.
 *
 * @package    cllajinet
 * @subpackage nomchrs
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 8507 2008-04-17 17:32:20Z fabien $
 */
class nomchrsActions extends sfActions
{
  public function executeIndex()
  {
    $this->nomchrsList = NomchrsPeer::doSelect(new Criteria());
  }

  public function executeShow($request)
  {
    $this->nomchrs = NomchrsPeer::retrieveByPk($request->getParameter('id'));
    $this->forward404Unless($this->nomchrs);
  }

  public function executeCreate()
  {
    $this->form = new NomchrsForm();

    $this->setTemplate('edit');
  }

  public function executeEdit($request)
  {
    $this->form = new NomchrsForm(NomchrsPeer::retrieveByPk($request->getParameter('id')));
  }

  public function executeUpdate($request)
  {
    $this->forward404Unless($request->isMethod('post'));

    $this->form = new NomchrsForm(NomchrsPeer::retrieveByPk($request->getParameter('id')));

    $this->form->bind($request->getParameter('nomchrs'));
    if ($this->form->isValid())
    {
      $nomchrs = $this->form->save();

      $this->redirect('nomchrs/edit?id='.$nomchrs->getId());
    }

    $this->setTemplate('edit');
  }

  public function executeDelete($request)
  {
    $this->forward404Unless($nomchrs = NomchrsPeer::retrieveByPk($request->getParameter('id')));

    $nomchrs->delete();

    $this->redirect('nomchrs/index');
  }
}
