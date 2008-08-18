<?php

/**
 * Findossier form base class.
 *
 * @package    form
 * @subpackage findossier
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 8807 2008-05-06 14:12:28Z fabien $
 */
class BaseFindossierForm extends BaseFormPropel
{
  protected static $categorieclassement = array('logé en direct','logé en indirect','abandon','ALT / Sous-location');
  public function setup()
  {
    $findossier=$this->getObject();
    $typeconditionacces=$findossier->getConditionsAcces();
    $villes=$findossier->getVilles();
    $typeparc=$findossier->getParc();
    $typeprophlm=$findossier->getTypePropHLM();
    $typepropprive=$findossier->getTypePropPrive();
    $typeprophebtemp=$findossier->getTypePropHebTemp();
    $typelogement=$findossier->getTypeLogements();
    $nomlocapass=$findossier->getNomLocapass();
    $nombailleurs=$findossier->getNomBailleursHLM();
    $nomfjt=$findossier->getNomFJT();
    $nomchrs=$findossier->getNomCHRS();
    $resultat = array_merge( $nomfjt, $nomchrs );


    if($findossier->getTypeParc()=='0'){   
    $this->setWidgets(array(
      'id'                         => new sfWidgetFormInputHidden(),
      'dossier_id'                 => new sfWidgetFormInputHidden(),//sfWidgetFormPropelSelect(array('model' => 'Dossier', 'add_empty' => true)),
      'type_parc'                  => new sfWidgetFormInputHidden(),
      'type_proprietaire_bailleur' => new sfWidgetFormSelectRadio(array('choices' => $typeprophlm)),
      'nom_proprietaire_bailleur'  => new sfWidgetFormSelectRadio(array('choices' => $nombailleurs)),
      'type_condition_acces'       => new sfWidgetFormSelectRadio(array('choices' => $typeconditionacces)),
      'nom_condition_acces'        => new sfWidgetFormSelectRadio(array('choices' => $nomlocapass)),
      'ville_logement'             => new sfWidgetFormSelect(array('choices' => $villes)),
      'departement_logement'       => new sfWidgetFormInput(),
      'type_logement'              => new sfWidgetFormSelectRadio(array('choices' => $typelogement)),
      'superficie_logement'        => new sfWidgetFormInput(),
      'loyer'                      => new sfWidgetFormInput(),
      'edf_gdf'                    => new sfWidgetFormInput(),
      'chauffage'                  => new sfWidgetFormInput(),
      'difficultes_rencontrees'    => new sfWidgetFormTextarea(),
      'categorie_classement'       => new sfWidgetFormSelectRadio(array('choices' => self::$categorieclassement)),
    ));}
elseif($findossier->getTypeParc()=='1'){   
    $this->setWidgets(array(
      'id'                         => new sfWidgetFormInputHidden(),
      'dossier_id'                 => new sfWidgetFormInputHidden(),//sfWidgetFormPropelSelect(array('model' => 'Dossier', 'add_empty' => true)),
      'type_parc'                  => new sfWidgetFormInputHidden(),
      'type_proprietaire_bailleur' => new sfWidgetFormSelectRadio(array('choices' => $typepropprive)),
      'nom_proprietaire_bailleur'  => new sfWidgetFormInputHidden(),
      'type_condition_acces'       => new sfWidgetFormSelectRadio(array('choices' => $typeconditionacces)),
      'nom_condition_acces'        => new sfWidgetFormSelectRadio(array('choices' => $nomlocapass)),
      'ville_logement'             => new sfWidgetFormSelect(array('choices' => $villes)),
      'departement_logement'       => new sfWidgetFormInput(),
      'type_logement'              => new sfWidgetFormSelectRadio(array('choices' => $typelogement)),
      'superficie_logement'        => new sfWidgetFormInput(),
      'loyer'                      => new sfWidgetFormInput(),
      'edf_gdf'                    => new sfWidgetFormInput(),
      'chauffage'                  => new sfWidgetFormInput(),
      'difficultes_rencontrees'    => new sfWidgetFormTextarea(),
      'categorie_classement'       => new sfWidgetFormSelectRadio(array('choices' => self::$categorieclassement)),
    ));}
elseif($findossier->getTypeParc()=='2'){   
    $this->setWidgets(array(
      'id'                         => new sfWidgetFormInputHidden(),
      'dossier_id'                 => new sfWidgetFormInputHidden(),//sfWidgetFormPropelSelect(array('model' => 'Dossier', 'add_empty' => true)),
      'type_parc'                  => new sfWidgetFormInputHidden(),
      'type_proprietaire_bailleur' => new sfWidgetFormSelectRadio(array('choices' => $typeprophebtemp)),
      'nom_proprietaire_bailleur'  => new sfWidgetFormSelectRadio(array('choices' => $resultat)),
      'type_condition_acces'       => new sfWidgetFormSelectRadio(array('choices' => $typeconditionacces)),
      'nom_condition_acces'        => new sfWidgetFormSelectRadio(array('choices' => $nomlocapass)),
      'ville_logement'             => new sfWidgetFormSelect(array('choices' => $villes)),
      'departement_logement'       => new sfWidgetFormInput(),
      'type_logement'              => new sfWidgetFormSelectRadio(array('choices' => $typelogement)),
      'superficie_logement'        => new sfWidgetFormInput(),
      'loyer'                      => new sfWidgetFormInput(),
      'edf_gdf'                    => new sfWidgetFormInput(),
      'chauffage'                  => new sfWidgetFormInput(),
      'difficultes_rencontrees'    => new sfWidgetFormTextarea(),
      'categorie_classement'       => new sfWidgetFormSelectRadio(array('choices' => self::$categorieclassement)),
    ));}
else{
    $this->setWidgets(array(
      'id'                         => new sfWidgetFormInputHidden(),
      'dossier_id'                 => new sfWidgetFormInputHidden(),//sfWidgetFormPropelSelect(array('model' => 'Dossier', 'add_empty' => true)),
      'type_parc'                  => new sfWidgetFormSelectRadio(array('choices' => $typeparc)),
      'type_proprietaire_bailleur' => new sfWidgetFormInput(),
      'nom_proprietaire_bailleur'  => new sfWidgetFormInput(),
      'type_condition_acces'       => new sfWidgetFormSelectRadio(array('choices' => $typeconditionacces)),
      'nom_condition_acces'        => new sfWidgetFormSelectRadio(array('choices' => $nomlocapass)),
      'ville_logement'             => new sfWidgetFormSelect(array('choices' => $villes)),
      'departement_logement'       => new sfWidgetFormInput(),
      'type_logement'              => new sfWidgetFormSelectRadio(array('choices' => $typelogement)),
      'superficie_logement'        => new sfWidgetFormInput(),
      'loyer'                      => new sfWidgetFormInput(),
      'edf_gdf'                    => new sfWidgetFormInput(),
      'chauffage'                  => new sfWidgetFormInput(),
      'difficultes_rencontrees'    => new sfWidgetFormTextarea(),
      'categorie_classement'       => new sfWidgetFormSelectRadio(array('choices' => self::$categorieclassement)),
    ));
    }
    
    $this->setValidators(array(
      'id'                         => new sfValidatorPropelChoice(array('model' => 'Findossier', 'column' => 'id', 'required' => false)),
      'dossier_id'                 => new sfValidatorPropelChoice(array('model' => 'Dossier', 'column' => 'id', 'required' => false)),
      'type_parc'                  => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'type_proprietaire_bailleur' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'nom_proprietaire_bailleur'  => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'type_condition_acces'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'nom_condition_acces'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'ville_logement'             => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'departement_logement'       => new sfValidatorInteger(array('required' => false)),
      'type_logement'              => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'superficie_logement'        => new sfValidatorInteger(array('required' => false)),
      'loyer'                      => new sfValidatorNumber(array('required' => false)),
      'edf_gdf'                    => new sfValidatorNumber(array('required' => false)),
      'chauffage'                  => new sfValidatorNumber(array('required' => false)),
      'difficultes_rencontrees'    => new sfValidatorString(array('required' => false)),
      'categorie_classement'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('findossier[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Findossier';
  }


}
