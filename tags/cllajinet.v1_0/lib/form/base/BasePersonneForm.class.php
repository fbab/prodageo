<?php

/**
 * Personne form base class.
 *
 * @package    form
 * @subpackage personne
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 8807 2008-05-06 14:12:28Z fabien $
 */
class BasePersonneForm extends BaseFormPropel
{
  protected static $nbEnfants = array('','1', '2', '3','4','5','6','7','8','9','10');
  
  public function setup()
  {
    $yearsEmbauche=range(date('Y') - 30, date('Y'));
    $yearsNaissance=range(date('Y') -38, date('Y'));
    $dateNaissance=new sfWidgetFormDate(array('format'=>'%day%/%month%/%year%','years'=>$yearsNaissance));
    $dateEmbauche=new sfWidgetFormDate(array('format'=>'%day%/%month%/%year%','years'=>$yearsEmbauche));
    $dateNaissance->addOption('years', array_combine($yearsNaissance, $yearsNaissance));
    $dateEmbauche->addOption('years', array_combine($yearsEmbauche, $yearsEmbauche));

    $personne=$this->getObject();
    $nationalite=$personne->getListNationalite();
    $categorieLogment=$personne->getListCatLogActuel();
    $villes=$personne->getListVilles();
    $typeStructure=$personne->getListTypeStructure();
    $typeContrat=$personne->getListTypeContrat();
    $trancheSalaire=$personne->getListTrancheSalaire();

    $this->setWidgets(array(
      'id'                        => new sfWidgetFormInputHidden(),
      'dossier_id'                => new sfWidgetFormInputHidden(),//sfWidgetFormPropelSelect(array('model' => 'Dossier', 'add_empty' => false)),
      'nom'                       => new sfWidgetFormInput(),
      'prenom'                    => new sfWidgetFormInput(),
      'num_telephone'             => new sfWidgetFormInput(),
      'sexe'                      => new sfWidgetFormSelectRadio(array('choices' => array('0' => '','1' => 'masculin', '2' => 'féminin'))),
      'date_naissance'            => $dateNaissance,
      'tranche_age'               => new sfWidgetFormSelectRadio(array('choices' => array('0' => '','1' => '18-20', '2' => '21-25', '3' => '26-30'))),
      'statut'                    => new sfWidgetFormSelectRadio(array('choices' => array('0' => '','1' => 'célibataire', '2' => 'en couple'))),
      'enfants'                   => new sfWidgetFormSelectRadio(array('choices' => array('0' => '','1' => 'oui', '2' => 'non'))),
      'nb_enfants'                => new sfWidgetFormSelect(array('choices' => self::$nbEnfants)),
      'lieu_naissance'            => new sfWidgetFormInput(),
      'nationalite'               => new sfWidgetFormSelect(array('choices' => $nationalite)),
      'adresse_actuelle'          => new sfWidgetFormInput(),
      'ville_actuelle'            => new sfWidgetFormSelect(array('choices' => $villes)),
      'type_logement_actuel'      => new sfWidgetFormInput(),
      'categorie_logement_actuel' => new sfWidgetFormSelectRadio(array('choices' => $categorieLogment)),
      'origine_demande'           => new sfWidgetFormInput(),
      'type_structure'            => new sfWidgetFormSelectRadio(array('choices' => $typeStructure)),
      'referent'                  => new sfWidgetFormInput(),
      'loyer_actuel'              => new sfWidgetFormInput(),
      'profession_actuelle'       => new sfWidgetFormInput(),
      'employeur_actuel'          => new sfWidgetFormInput(),
      'ville_employeur_actuel'    => new sfWidgetFormSelect(array('choices' => $villes)),
      'dpt_employeur_actuel'      => new sfWidgetFormInput(),
      'date_embauche'             => $dateEmbauche,
      'type_contrat'              => new sfWidgetFormSelectRadio(array('choices' => $typeContrat)),
      'tranche_salaire'           => new sfWidgetFormSelectRadio(array('choices' => $trancheSalaire)),
      'salaire_exact'             => new sfWidgetFormInput(),
      'dettes_credits'            => new sfWidgetFormInput(),
      'motif_recherche_logement'  => new sfWidgetFormTextarea(),
      'observations'              => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'id'                        => new sfValidatorPropelChoice(array('model' => 'Personne', 'column' => 'id', 'required' => false)),
      'dossier_id'                => new sfValidatorPropelChoice(array('model' => 'Dossier', 'column' => 'id', 'required' => false)),
      'nom'                       => new sfValidatorString(array('max_length' => 255, 'required' => true)),
      'prenom'                    => new sfValidatorString(array('max_length' => 255, 'required' => true)),
      'num_telephone'             => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'sexe'                      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'date_naissance'            => new sfValidatorDate(array('required' => false)),
      'tranche_age'               => new sfValidatorInteger(array('required' => false)),
      'statut'                    => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'enfants'                   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'nb_enfants'                => new sfValidatorInteger(array('required' => false)),
      'lieu_naissance'            => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'nationalite'               => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'adresse_actuelle'          => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'ville_actuelle'            => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'type_logement_actuel'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'categorie_logement_actuel' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'origine_demande'           => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'type_structure'            => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'referent'                  => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'loyer_actuel'              => new sfValidatorNumber(array('required' => false)),
      'profession_actuelle'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'employeur_actuel'          => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'ville_employeur_actuel'    => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'dpt_employeur_actuel'      => new sfValidatorInteger(array('required' => false)),
      'date_embauche'             => new sfValidatorDate(array('required' => false)),
      'type_contrat'              => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'tranche_salaire'           => new sfValidatorInteger(array('required' => false)),
      'salaire_exact'             => new sfValidatorNumber(array('required' => false)),
      'dettes_credits'            => new sfValidatorNumber(array('required' => false)),
      'motif_recherche_logement'  => new sfValidatorString(array('required' => false)),
      'observations'              => new sfValidatorString(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('personne[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Personne';
  }


}
