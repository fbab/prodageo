<?php

/**
 * personne actions.
 *
 * @package    cllajinet
 * @subpackage personne
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 8507 2008-04-17 17:32:20Z fabien $
 */
class personneActions extends sfActions
{
  public function executeIndex()
  {
    $this->personneList = PersonnePeer::doSelect(new Criteria());
  }

  public function executeShow($request)
  {
    $this->personne = PersonnePeer::retrieveByPk($request->getParameter('id'));
    $this->forward404Unless($this->personne);
  }

  public function executeCreate()
  {
    $this->form = new PersonneForm();
  }

  public function executeEdit($request)
  {
    $this->form = new PersonneForm(PersonnePeer::retrieveByPk($request->getParameter('id')));
  }

  public function executeUpdate($request)
  {
    $this->forward404Unless($request->isMethod('post'));

    $this->form = new PersonneForm(PersonnePeer::retrieveByPk($request->getParameter('id')));

    $this->form->bind($request->getParameter('personne'));
    if ($this->form->isValid())
    {
      $personne = $this->form->save();

      $this->redirect('personne/edit?id='.$personne->getId());
    }

    $this->setTemplate('edit');
  }

  public function executeDelete($request)
  {
    $this->forward404Unless($personne = PersonnePeer::retrieveByPk($request->getParameter('id')));

    $personne->delete();

    $this->redirect('personne/index');
  }
}
