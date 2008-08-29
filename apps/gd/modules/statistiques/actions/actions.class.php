<?php

/**
 * statistiques actions.
 *
 * @package    cllajinet
 * @subpackage statistiques
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 8507 2008-04-17 17:32:20Z fabien $
 */
class statistiquesActions extends sfActions
{
  public function executeIndex()
  {
    $this->statistiquesList = StatistiquesPeer::doSelect(new Criteria());
  }

  public function executeShow($request)
  {
    $this->statistiques = StatistiquesPeer::retrieveByPk($request->getParameter('id'));
    $this->forward404Unless($this->statistiques);
  }

  public function executeCreate()
  {
    $this->form = new StatistiquesForm();
    $this->form->setDefault('datestat', 'now');

    $this->setTemplate('edit');
  }

  public function executeEdit($request)
  {
    $this->form = new StatistiquesForm(StatistiquesPeer::retrieveByPk($request->getParameter('id')));
  }

  public function executeUpdate($request)
  {
    $this->forward404Unless($request->isMethod('post'));

    $this->form = new StatistiquesForm(StatistiquesPeer::retrieveByPk($request->getParameter('id')));

    $this->form->bind($request->getParameter('statistiques'));
    if ($this->form->isValid())
    {
      $statistiques = $this->form->save();

      $this->redirect('statistiques/edit?id='.$statistiques->getId());
    }

    $this->setTemplate('edit');
  }

  public function executeDelete($request)
  {
    $this->forward404Unless($statistiques = StatistiquesPeer::retrieveByPk($request->getParameter('id')));

    $statistiques->delete();

    $this->redirect('statistiques/index');
  }
}
