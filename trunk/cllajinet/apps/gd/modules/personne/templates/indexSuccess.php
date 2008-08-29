
<h1>Personne List</h1>
<table class="traitsVisibles">
  <thead>
    <tr class="traitsVisibles">
      <th class="traitsVisibles">Id personne</th>
      <th class="traitsVisibles">Dossier</th>
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
    <?php $typeStructure = TypestructurePeer::retrieveByPk($personne->getTypeStructure()+1);?>
    <?php $nationalite = NationalitePeer::retrieveByPk($personne->getNationalite()+1);?>
    <?php $villeActuelle = VillePeer::retrieveByPk($personne->getVilleActuelle()+1);?>
    <?php $catLogement = CategorielogementactuelPeer::retrieveByPk($personne->getCategorielogementactuel()+1);?>
    <?php $villeEmployeur = VillePeer::retrieveByPk($personne->getVilleEmployeurActuel()+1);?>
    <?php $typeContrat = TypecontratPeer::retrieveByPk($personne->getTypecontrat()+1);?>
    <?php $trancheSalaire = TranchesalairePeer::retrieveByPk($personne->getTranchesalaire()+1);?>

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
      
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<a href="<?php echo url_for('personne/create') ?>">Create</a>
