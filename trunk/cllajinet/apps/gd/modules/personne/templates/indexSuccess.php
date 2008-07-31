<h1>Personne List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
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
    </tr>
  </thead>
  <tbody>
    <?php foreach ($personneList as $personne): ?>
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
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<a href="<?php echo url_for('personne/create') ?>">Create</a>
