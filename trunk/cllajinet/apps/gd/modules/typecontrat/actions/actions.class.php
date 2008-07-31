<?php

/**
 * typecontrat actions.
 *
 * @package    cllajinet
 * @subpackage typecontrat
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 8507 2008-04-17 17:32:20Z fabien $
 */
class typecontratActions extends sfActions
{
  public function executeIndex()
  {
    $this->typecontratList = TypecontratPeer::doSelect(new Criteria());
  }

  public function executeShow($request)
  {
    $this->typecontrat = TypecontratPeer::retrieveByPk($request->getParameter('id'));
    $this->forward404Unless($this->typecontrat);
  }

  public function executeCreate()
  {
    $this->form = new TypecontratForm();

    $this->setTemplate('edit');
  }

  public function executeEdit($request)
  {
    $this->form = new TypecontratForm(TypecontratPeer::retrieveByPk($request->getParameter('id')));
  }

  public function executeUpdate($request)
  {
    $this->forward404Unless($request->isMethod('post'));

    $this->form = new TypecontratForm(TypecontratPeer::retrieveByPk($request->getParameter('id')));

    $this->form->bind($request->getParameter('typecontrat'));
    if ($this->form->isValid())
    {
      $typecontrat = $this->form->save();

      $this->redirect('typecontrat/edit?id='.$typecontrat->getId());
    }

    $this->setTemplate('edit');
  }

  public function executeDelete($request)
  {
    $this->forward404Unless($typecontrat = TypecontratPeer::retrieveByPk($request->getParameter('id')));

    $typecontrat->delete();

    $this->redirect('typecontrat/index');
  }
}
