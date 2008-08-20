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

      //$var1=$this->getRequest();
      $tab=$request->getPostParameters();
      if(array_key_exists("Conjoint",$tab)){$this->redirect('personne/create/index');}
      elseif(array_key_exists("Colocataire",$tab)){$this->redirect('personne/create/index');}
      else{$this->redirect('dossier/cloture?id='.$personne->getDossierId());}
    }

    $this->setTemplate('edit');
  }

  public function executeDelete($request)
  {
    $this->forward404Unless($personne = PersonnePeer::retrieveByPk($request->getParameter('id')));

    $personne->delete();

    $this->redirect('personne/index');
  }


  public function executeSearch($request)
  {

    $c = new Criteria();
    $c->add(PersonnePeer::NOM, $request->getParameter('nom',""));
    $c->addAscendingOrderByColumn(PersonnePeer::NOM);
    $this->personneList = PersonnePeer::doSelect($c);
    $nbresultats=count($this->personneList);
    if($nbresultats==1){
        $this->redirect('personne/edit?id='.$this->personneList[0]->getId());
    }
    elseif($nbresultats==0){
        $this->redirect('choixAction/index');
    }
    else{$this->setTemplate('index');}
  }
}
