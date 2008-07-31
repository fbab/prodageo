<?php

/**
 * typestructure actions.
 *
 * @package    cllajinet
 * @subpackage typestructure
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 8507 2008-04-17 17:32:20Z fabien $
 */
class typestructureActions extends sfActions
{
  public function executeIndex()
  {
    $this->typestructureList = TypestructurePeer::doSelect(new Criteria());
  }

  public function executeShow($request)
  {
    $this->typestructure = TypestructurePeer::retrieveByPk($request->getParameter('id'));
    $this->forward404Unless($this->typestructure);
  }

  public function executeCreate()
  {
    $this->form = new TypestructureForm();

    $this->setTemplate('edit');
  }

  public function executeEdit($request)
  {
    $this->form = new TypestructureForm(TypestructurePeer::retrieveByPk($request->getParameter('id')));
  }

  public function executeUpdate($request)
  {
    $this->forward404Unless($request->isMethod('post'));

    $this->form = new TypestructureForm(TypestructurePeer::retrieveByPk($request->getParameter('id')));

    $this->form->bind($request->getParameter('typestructure'));
    if ($this->form->isValid())
    {
      $typestructure = $this->form->save();

      $this->redirect('typestructure/edit?id='.$typestructure->getId());
    }

    $this->setTemplate('edit');
  }

  public function executeDelete($request)
  {
    $this->forward404Unless($typestructure = TypestructurePeer::retrieveByPk($request->getParameter('id')));

    $typestructure->delete();

    $this->redirect('typestructure/index');
  }
}
