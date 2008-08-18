<?php

/**
 * conditionsacces actions.
 *
 * @package    cllajinet
 * @subpackage conditionsacces
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 8507 2008-04-17 17:32:20Z fabien $
 */
class conditionsaccesActions extends sfActions
{
  public function executeIndex()
  {
    $this->conditionsaccesList = ConditionsaccesPeer::doSelect(new Criteria());
  }

  public function executeShow($request)
  {
    $this->conditionsacces = ConditionsaccesPeer::retrieveByPk($request->getParameter('id'));
    $this->forward404Unless($this->conditionsacces);
  }

  public function executeCreate()
  {
    $this->form = new ConditionsaccesForm();

    $this->setTemplate('edit');
  }

  public function executeEdit($request)
  {
    $this->form = new ConditionsaccesForm(ConditionsaccesPeer::retrieveByPk($request->getParameter('id')));
  }

  public function executeUpdate($request)
  {
    $this->forward404Unless($request->isMethod('post'));

    $this->form = new ConditionsaccesForm(ConditionsaccesPeer::retrieveByPk($request->getParameter('id')));

    $this->form->bind($request->getParameter('conditionsacces'));
    if ($this->form->isValid())
    {
      $conditionsacces = $this->form->save();

      $this->redirect('conditionsacces/edit?id='.$conditionsacces->getId());
    }

    $this->setTemplate('edit');
  }

  public function executeDelete($request)
  {
    $this->forward404Unless($conditionsacces = ConditionsaccesPeer::retrieveByPk($request->getParameter('id')));

    $conditionsacces->delete();

    $this->redirect('conditionsacces/index');
  }
}
