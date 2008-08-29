<?php

/**
 * dossier actions.
 *
 * @package    cllajinet
 * @subpackage dossier
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 8507 2008-04-17 17:32:20Z fabien $
 */
class dossierActions extends sfActions
{
  public function executeIndex()
  {
    $this->dossierList = DossierPeer::doSelect(new Criteria());
  }

  public function executeShow($request)
  {
    $this->dossier = DossierPeer::retrieveByPk($request->getParameter('id'));
    $this->forward404Unless($this->dossier);
  }

  public function executeCreate()
  {
    $this->form = new DossierForm();
    $this->form->setDefault('etat', 'en cours');

  }

  public function executeEdit($request)
  {
    $this->form = new DossierForm(DossierPeer::retrieveByPk($request->getParameter('id')));

  }

  public function executeUpdate($request)
  {
    $this->forward404Unless($request->isMethod('post'));

    $this->form = new DossierForm(DossierPeer::retrieveByPk($request->getParameter('id')));

    $tab=$request->getPostParameters();


    if(array_key_exists("poursuivreCloture",$tab)){
    	 $validators=$this->form->getValidatorSchema();
   	 $fields=$validators->getFields();
   	 $validator=$fields['date_cloture_dossier'];//on récupère ici un objet de type sfDateValidator
   	 $tab=$validator->getOptions();
    	 //$validator->setOption('required',true); n'est plus necessaire car l'action suivante englobe ce cas 

        $validators->setPostValidator(new sfValidatorSchemaCompare('date_ouverture_dossier',sfValidatorSchemaCompare::LESS_THAN_EQUAL,'date_cloture_dossier', array(),array('invalid' => 'la date d\'ouverture du dossier(%left_field%) doit être plus récente que la date de clôture (%right_field%)')));
    }
    $this->form->bind($request->getParameter('dossier'));
    if ($this->form->isValid())
    {
      $dossier = $this->form->save();
      $var1=$this->getRequest();
      $tab=$var1->getPostParameters();
      if(array_key_exists("profilPersonne",$tab)){$this->redirect('personne/create/index');}
      else{$this->redirect('findossier/create?dossier_id='.$dossier->getId());}      
    }

    $this->setTemplate('edit');
  }

  public function executeDelete($request)
  {
    $this->forward404Unless($dossier = DossierPeer::retrieveByPk($request->getParameter('id')));

    $dossier->delete();

    $this->redirect('dossier/index');
  }

  public function executeCloture($request)
  {
    $dossier=DossierPeer::retrieveByPk($request->getParameter('id'));
    $this->form=new DossierForm($dossier);
    $this->form->setDefault('etat', 'cloture');
    $this->setTemplate('edit');
  }
  public function executeModification($request)
  {
    $dossier=DossierPeer::retrieveByPk($request->getParameter('id'));
    $this->form=new DossierForm($dossier);
    $this->setTemplate('edit');
  }

}
