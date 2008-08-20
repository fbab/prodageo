
<h1>Personne List</h1>
<table>
  <thead>
    <tr>
      <th>Id personne</th>
      <th>Dossier</th>
      <th>Nom</th>
      <th>Prenom</th>
      <th>Num telephone</th>
      <th>Sexe</th>
      <th>Date naissance</th>
      <th>Tranche age</th>
      <th>Statut</th>
      <th>Enfants</th>
      <th>Nb enfants</th>
      <th>Lieu naissance</th>
      <th>Nationalite</th>
      <th>Adresse actuelle</th>
      <th>Ville actuelle</th>
      <th>Type logement actuel</th>
      <th>Categorie logement actuel</th>
      <th>Origine demande</th>
      <th>Type structure</th>
      <th>Referent</th>
      <th>Loyer actuel</th>
      <th>Profession actuelle</th>
      <th>Employeur actuel</th>
      <th>Ville employeur actuel</th>
      <th>Dpt employeur actuel</th>
      <th>Date embauche</th>
      <th>Type contrat</th>
      <th>Tranche salaire</th>
      <th>Salaire exact</th>
      <th>Dettes credits</th>
      <th>Motif recherche logement</th>
      <th>Observations</th>
      <th></th>
      <th>Etat du dossier</th>
      <th>Date ouverture dossier</th>
      <th>Date cloture dossier</th>
      <th>Type dossier</th>
      <!--<th></th>
      <th>Dossier</th>
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
    <?php /*$findossier = FindossierPeer::retrieveByPk($personne->getIdFinDossier($personne->getDossierId()));*/?>
    <tr>
      <td><a href="<?php echo url_for('personne/show?id='.$personne->getId()) ?>"><?php echo $personne->getId() ?></a></td>
      <td><?php echo $personne->getDossierId() ?></td>
      <td><?php echo $personne->getNom() ?></td>
      <td><?php echo $personne->getPrenom() ?></td>
      <td><?php echo $personne->getNumTelephone() ?></td>
      <td><?php echo $personne->getSexe() ?></td>
      <td><?php echo $personne->getDateNaissance() ?></td>
      <td><?php echo $personne->getTrancheAge() ?></td>
      <td><?php echo $personne->getStatut() ?></td>
      <td><?php echo $personne->getEnfants() ?></td>
      <td><?php echo $personne->getNbEnfants() ?></td>
      <td><?php echo $personne->getLieuNaissance() ?></td>
      <td><?php echo $personne->getNationalite() ?></td>
      <td><?php echo $personne->getAdresseActuelle() ?></td>
      <td><?php echo $personne->getVilleActuelle() ?></td>
      <td><?php echo $personne->getTypeLogementActuel() ?></td>
      <td><?php echo $personne->getCategorieLogementActuel() ?></td>
      <td><?php echo $personne->getOrigineDemande() ?></td>
      <td><?php echo $personne->getTypeStructure() ?></td>
      <td><?php echo $personne->getReferent() ?></td>
      <td><?php echo $personne->getLoyerActuel() ?></td>
      <td><?php echo $personne->getProfessionActuelle() ?></td>
      <td><?php echo $personne->getEmployeurActuel() ?></td>
      <td><?php echo $personne->getVilleEmployeurActuel() ?></td>
      <td><?php echo $personne->getDptEmployeurActuel() ?></td>
      <td><?php echo $personne->getDateEmbauche() ?></td>
      <td><?php echo $personne->getTypeContrat() ?></td>
      <td><?php echo $personne->getTrancheSalaire() ?></td>
      <td><?php echo $personne->getSalaireExact() ?></td>
      <td><?php echo $personne->getDettesCredits() ?></td>
      <td><?php echo $personne->getMotifRechercheLogement() ?></td>
      <td><?php echo $personne->getObservations() ?></td>
      <td></td>
      <td><?php echo $dossier->getEtat() ?></td>
      <td><?php echo $dossier->getDateOuvertureDossier() ?></td>
      <td><?php echo $dossier->getDateClotureDossier() ?></td>
      <td><?php echo $dossier->getTypeDossier() ?></td>
      
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<a href="<?php echo url_for('personne/create') ?>">Create</a>
