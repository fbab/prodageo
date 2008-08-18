<?php

/**
 * categorielogementactuel actions.
 *
 * @package    cllajinet
 * @subpackage categorielogementactuel
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 8507 2008-04-17 17:32:20Z fabien $
 */
class categorielogementactuelActions extends sfActions
{
  public function executeIndex()
  {
    $this->categorielogementactuelList = CategorielogementactuelPeer::doSelect(new Criteria());
  }

  public function executeShow($request)
  {
    $this->categorielogementactuel = CategorielogementactuelPeer::retrieveByPk($request->getParameter('id'));
    $this->forward404Unless($this->categorielogementactuel);
  }

  public function executeCreate()
  {
    $this->form = new CategorielogementactuelForm();

    $this->setTemplate('edit');
  }

  public function executeEdit($request)
  {
    $this->form = new CategorielogementactuelForm(CategorielogementactuelPeer::retrieveByPk($request->getParameter('id')));
  }

  public function executeUpdate($request)
  {
    $this->forward404Unless($request->isMethod('post'));

    $this->form = new CategorielogementactuelForm(CategorielogementactuelPeer::retrieveByPk($request->getParameter('id')));

    $this->form->bind($request->getParameter('categorielogementactuel'));
    if ($this->form->isValid())
    {
      $categorielogementactuel = $this->form->save();

      $this->redirect('categorielogementactuel/edit?id='.$categorielogementactuel->getId());
    }

    $this->setTemplate('edit');
  }

  public function executeDelete($request)
  {
    $this->forward404Unless($categorielogementactuel = CategorielogementactuelPeer::retrieveByPk($request->getParameter('id')));

    $categorielogementactuel->delete();

    $this->redirect('categorielogementactuel/index');
  }
}
