<?php

/**
 * typeproprietairehebtemp actions.
 *
 * @package    cllajinet
 * @subpackage typeproprietairehebtemp
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 8507 2008-04-17 17:32:20Z fabien $
 */
class typeproprietairehebtempActions extends sfActions
{
  public function executeIndex()
  {
    $this->typeproprietairehebtempList = TypeproprietairehebtempPeer::doSelect(new Criteria());
  }

  public function executeShow($request)
  {
    $this->typeproprietairehebtemp = TypeproprietairehebtempPeer::retrieveByPk($request->getParameter('id'));
    $this->forward404Unless($this->typeproprietairehebtemp);
  }

  public function executeCreate()
  {
    $this->form = new TypeproprietairehebtempForm();

    $this->setTemplate('edit');
  }

  public function executeEdit($request)
  {
    $this->form = new TypeproprietairehebtempForm(TypeproprietairehebtempPeer::retrieveByPk($request->getParameter('id')));
  }

  public function executeUpdate($request)
  {
    $this->forward404Unless($request->isMethod('post'));

    $this->form = new TypeproprietairehebtempForm(TypeproprietairehebtempPeer::retrieveByPk($request->getParameter('id')));

    $this->form->bind($request->getParameter('typeproprietairehebtemp'));
    if ($this->form->isValid())
    {
      $typeproprietairehebtemp = $this->form->save();

      $this->redirect('typeproprietairehebtemp/edit?id='.$typeproprietairehebtemp->getId());
    }

    $this->setTemplate('edit');
  }

  public function executeDelete($request)
  {
    $this->forward404Unless($typeproprietairehebtemp = TypeproprietairehebtempPeer::retrieveByPk($request->getParameter('id')));

    $typeproprietairehebtemp->delete();

    $this->redirect('typeproprietairehebtemp/index');
  }
}
