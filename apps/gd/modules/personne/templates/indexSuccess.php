
<h1>Personne List</h1>
<table class="traitsVisibles">
  <thead>
    <tr class="traitsVisibles">
      <th class="traitsVisibles">Num Personne</th>
      <th class="traitsVisibles">Num Dossier</th>
      <th class="traitsVisibles">Etat du dossier</th>
      <th class="traitsVisibles">Date ouverture dossier</th>
      <th class="traitsVisibles">Date cloture dossier</th>
      <th class="traitsVisibles">Type dossier</th>
      <th class="traitsVisibles"></th>
      <th class="traitsVisibles">Nom</th>
      <th class="traitsVisibles">Prenom</th>
      <th class="traitsVisibles">Num telephone</th>
      <th class="traitsVisibles">Sexe</th>
      <th class="traitsVisibles">Date naissance</th>
      <th class="traitsVisibles">Tranche age</th>
      <th class="traitsVisibles">Statut</th>
      <th class="traitsVisibles">Enfants</th>
      <th class="traitsVisibles">Nb enfants</th>
      <th class="traitsVisibles">Lieu naissance</th>
      <th class="traitsVisibles">Nationalite</th>
      <th class="traitsVisibles">Adresse actuelle</th>
      <th class="traitsVisibles">Ville actuelle</th>
      <th class="traitsVisibles">Type logement actuel</th>
      <th class="traitsVisibles">Categorie logement actuel</th>
      <th class="traitsVisibles">Origine demande</th>
      <th class="traitsVisibles">Type structure</th>
      <th class="traitsVisibles">Referent</th>
      <th class="traitsVisibles">Loyer actuel</th>
      <th class="traitsVisibles">Profession actuelle</th>
      <th class="traitsVisibles">Employeur actuel</th>
      <th class="traitsVisibles">Ville employeur actuel</th>
      <th class="traitsVisibles">Dpt employeur actuel</th>
      <th class="traitsVisibles">Date embauche</th>
      <th class="traitsVisibles">Type contrat</th>
      <th class="traitsVisibles">Tranche salaire</th>
      <th class="traitsVisibles">Salaire exact</th>
      <th class="traitsVisibles">Dettes credits</th>
      <th class="traitsVisibles">Motif recherche logement</th>
      <th class="traitsVisibles">Observations</th>
      <th class="traitsVisibles">Num Fin Dossier</th>
      <th class="traitsVisibles">Type parc</th>
      <th class="traitsVisibles">Type proprietaire bailleur</th>
      <th class="traitsVisibles">Nom proprietaire bailleur</th>
      <th class="traitsVisibles">Type condition acces</th>
      <th class="traitsVisibles">Nom condition acces</th>
      <th class="traitsVisibles">Ville logement</th>
      <th class="traitsVisibles">Departement logement</th>
      <th class="traitsVisibles">Type logement</th>
      <th class="traitsVisibles">Superficie logement</th>
      <th class="traitsVisibles">Loyer</th>
      <th class="traitsVisibles">Edf gdf</th>
      <th class="traitsVisibles">Chauffage</th>
      <th class="traitsVisibles">Difficultes rencontrees</th>
      <th class="traitsVisibles">Categorie classement</th>

      <!--<th>Dossier</th>
      <th>Type parc</th>
      <th>Type proprietaire bailleur</th>
      <th>Nom proprietaire bailleur</th>
      <th>Type condition acces</th>
      <th>Nom condition acces</th>
      <th>Ville logement</th>
      <th>Departement logement</th>
      <th>Type logement</th>
      <th>Superficie logement</th>
      <th>Loyer</th>
      <th>Edf gdf</th>
      <th>Chauffage</th>
      <th>Difficultes rencontrees</th>
      <th>Categorie classement</th> -->
    </tr>
  </thead>
  <tbody>
    <?php foreach ($personneList as $personne): ?>

    <?php $dossier = DossierPeer::retrieveByPk($personne->getDossierId());?>
    <?php $findossier = FindossierPeer::retrieveByPk($personne->getIdFinDossier($personne->getDossierId()));?>
    <?php $typeStructure = TypestructurePeer::retrieveByPk($personne->getTypeStructure());?>
    <?php $nationalite = NationalitePeer::retrieveByPk($personne->getNationalite());?>
    <?php $villeActuelle = VillePeer::retrieveByPk($personne->getVilleActuelle());?>
    <?php $catLogement = CategorielogementactuelPeer::retrieveByPk($personne->getCategorielogementactuel());?>
    <?php $villeEmployeur = VillePeer::retrieveByPk($personne->getVilleEmployeurActuel());?>
    <?php $typeContrat = TypecontratPeer::retrieveByPk($personne->getTypecontrat());?>
    <?php $trancheSalaire = TranchesalairePeer::retrieveByPk($personne->getTranchesalaire());?>



    <tr>
      <td class="traitsVisibles"><a href="<?php echo url_for('personne/show?id='.$personne->getId()) ?>"><?php echo $personne->getId() ?></a></td>
      <td class="traitsVisibles"><?php echo $personne->getDossierId() ?></td>
      <td class="traitsVisibles"><?php echo $dossier->getEtat() ?></td>
      <td class="traitsVisibles"><?php echo $dossier->getDateOuvertureDossier() ?></td>
      <td class="traitsVisibles"><?php echo $dossier->getDateClotureDossier() ?></td>
      <td class="traitsVisibles"><?php echo $dossier->getTypeDossierTraduit($dossier->getTypeDossier()) ?></td>
      <td class="traitsVisibles"></td>
      <td class="traitsVisibles"><?php echo $personne->getNom() ?></td>
      <td class="traitsVisibles"><?php echo $personne->getPrenom() ?></td>
      <td class="traitsVisibles"><?php echo $personne->getNumTelephone() ?></td>
      <td class="traitsVisibles"><?php echo $personne->getSexeTraduit($personne->getSexe()) ?></td>
      <td class="traitsVisibles"><?php echo $personne->getDateNaissance() ?></td>
      <td class="traitsVisibles"><?php echo $personne->getTrancheAgeTraduit($personne->getTrancheAge()) ?></td>
      <td class="traitsVisibles"><?php echo $personne->getStatutTraduit($personne->getStatut()) ?></td>
      <td class="traitsVisibles"><?php echo $personne->getEnfantsTraduit($personne->getEnfants()) ?></td>
      <td class="traitsVisibles"><?php echo $personne->getNbEnfants() ?></td>
      <td class="traitsVisibles"><?php echo $personne->getLieuNaissance() ?></td>
      <td class="traitsVisibles"><?php if($nationalite != null){echo $nationalite->getListnationalite();}else{echo 'inconnu';} ?> </td>
      <td class="traitsVisibles"><?php echo $personne->getAdresseActuelle() ?></td>
      <td class="traitsVisibles"><?php if($villeActuelle != null){echo $villeActuelle->getListville();}else{echo 'inconnu';} ?></td>
      <td class="traitsVisibles"><?php echo $personne->getTypeLogementActuel() ?></td>
      <td class="traitsVisibles"><?php if($catLogement != null){echo $catLogement->getListCategorielogementactuel();}else{echo 'inconnu';}?></td>
      <td class="traitsVisibles"><?php echo $personne->getOrigineDemande() ?></td>
      <td class="traitsVisibles"><?php if($typeStructure != null){echo $typeStructure->getListTypestructure();}else{echo 'inconnu';} ?></td>
      <td class="traitsVisibles"><?php echo $personne->getReferent() ?></td>
      <td class="traitsVisibles"><?php echo $personne->getLoyerActuel() ?></td>
      <td class="traitsVisibles"><?php echo $personne->getProfessionActuelle() ?></td>
      <td class="traitsVisibles"><?php echo $personne->getEmployeurActuel() ?></td>
      <td class="traitsVisibles"><?php if($villeEmployeur != null){echo $villeEmployeur->getListville();}else{echo 'inconnu';} ?></td>
      <td class="traitsVisibles"><?php echo $personne->getDptEmployeurActuel() ?></td>
      <td class="traitsVisibles"><?php echo $personne->getDateEmbauche() ?></td>
      <td class="traitsVisibles"><?php if($typeContrat != null){echo $typeContrat->getListTypecontrat();}else{echo 'inconnu';} ?></td>
      <td class="traitsVisibles"><?php if($trancheSalaire != null){echo $trancheSalaire->getListTranchesalaire();}else{echo 'inconnu';} ?></td>
      <td class="traitsVisibles"><?php echo $personne->getSalaireExact() ?></td>
      <td class="traitsVisibles"><?php echo $personne->getDettesCredits() ?></td>
      <td class="traitsVisibles"><?php echo $personne->getMotifRechercheLogement() ?></td>
      <td class="traitsVisibles"><?php echo $personne->getObservations() ?></td>


      <?php if($findossier != null):?>
      <?php $typeParc = TypeparcPeer::retrieveByPk($findossier->getTypeparc());?>
      <?php $typeProprietaireHLM = TypeproprietairehlmPeer::retrieveByPk($findossier->getTypeProprietaireBailleur());?>
      <?php $typeProprietairePrive = TypeproprietaireprivePeer::retrieveByPk($findossier->getTypeProprietaireBailleur());?>  
      <?php $typeProprietaireHebTemp = TypeproprietairehebtempPeer::retrieveByPk($findossier->getTypeProprietaireBailleur());?>
      <?php $nomFJT = NomfjtPeer::retrieveByPk($findossier->getNomProprietaireBailleur());?>
      <?php $nomCHRS = NomchrsPeer::retrieveByPk($findossier->getNomProprietaireBailleur());?>
      <?php $nomBailleursHLM = NombailleurshlmPeer::retrieveByPk($findossier->getNomProprietaireBailleur());?>
      <?php $conditionsAcces = ConditionsaccesPeer::retrieveByPk($findossier->getTypeConditionAcces());?>
      <?php $nomLocaPass = NomlocapassPeer::retrieveByPk($findossier->getNomConditionAcces());?>
      <?php $villeLogement = VillePeer::retrieveByPk($findossier->getVilleLogement());?>
      <?php $typeLogement = TypelogementPeer::retrieveByPk($findossier->getTypeLogement());?>
      <td class="traitsVisibles"><a href="<?php echo url_for('findossier/show?id='.$findossier->getId()) ?>"><?php echo $findossier->getId() ?></a></td>

      <td class="traitsVisibles"><?php if($typeParc != null){echo $typeParc->getListtypeparc();}else{echo 'inconnu';}?></td>
      <td class="traitsVisibles"><?php
	if($typeParc != null){
           if($typeParc->getListtypeparc()=='HLM'){ 
	     if($typeProprietaireHLM != null){
	        echo $typeProprietaireHLM->getListtypeproprietairehlm();
	     }
	     else{echo 'inconnu';}
	   }
	   elseif($typeParc->getListtypeparc()=='Privé'){
             if($typeProprietairePrive != null){
	        echo $typeProprietairePrive->getListtypeproprietaireprive();
	     }
	     else{echo 'inconnu';}
	   }
	   else{
             if($typeProprietaireHebTemp != null){
	        echo $typeProprietaireHebTemp->getListtypeproprietairehebtemp();
	     }
	     else{echo 'inconnu';}
	   }
       }
       else{echo 'inconnu';}      
      ?></td>
 
      <td class="traitsVisibles"><?php 
      if($typeParc != null){
           if($typeParc->getListtypeparc()=='HLM'){ 
	     if($nomBailleursHLM != null){
	        echo $nomBailleursHLM->getListnombailleurshlm();
	     }
	     else{echo 'inconnu';}
	   }
	   elseif($typeParc->getListtypeparc()=='Privé'){
             echo '';
	   }
	   else{
             if($nomFJT != null){
	        echo $nomFJT->getListnomfjt();
	     }
	     else{echo 'inconnu';}
	   }
       }
       else{echo 'inconnu';}   

      ?></td>
      <td class="traitsVisibles"><?php if($conditionsAcces != null){echo $conditionsAcces->getListconditionsacces();}else{echo 'inconnu';}?></td>
      <td class="traitsVisibles"><?php if($nomLocaPass != null){echo $nomLocaPass->getListnomlocapass();}else{echo 'inconnu';} ?></td>
      <td class="traitsVisibles"><?php if($villeLogement != null){echo $villeLogement->getListville();}else{echo 'inconnu';}?></td>
      <td class="traitsVisibles"><?php echo $findossier->getDepartementLogement() ?></td>
      <td class="traitsVisibles"><?php if($typeLogement != null){echo $typeLogement->getListtypelogement();}else{echo 'inconnu';} ?></td>
      <td class="traitsVisibles"><?php echo $findossier->getSuperficieLogement() ?></td>
      <td class="traitsVisibles"><?php echo $findossier->getLoyer() ?></td>
      <td class="traitsVisibles"><?php echo $findossier->getEdfGdf() ?></td>
      <td class="traitsVisibles"><?php echo $findossier->getChauffage() ?></td>
      <td class="traitsVisibles"><?php echo $findossier->getDifficultesRencontrees() ?></td>
      <td class="traitsVisibles"><?php echo $findossier->getCategorieClassement() ?></td>
      <?php endif;?>

    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<a href="<?php echo url_for('personne/create') ?>">Create</a>
