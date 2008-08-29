<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $personne->getId() ?></td>
    </tr>
    <tr>
      <th>Dossier:</th>
      <td><?php echo $personne->getDossierId() ?></td>
    </tr>
    <tr>
      <th>Nom:</th>
      <td><?php echo $personne->getNom() ?></td>
    </tr>
    <tr>
      <th>Prenom:</th>
      <td><?php echo $personne->getPrenom() ?></td>
    </tr>
    <tr>
      <th>Num telephone:</th>
      <td><?php echo $personne->getNumTelephone() ?></td>
    </tr>
    <tr>
      <th>Sexe:</th>
      <td><?php echo $personne->getSexe() ?></td>
    </tr>
    <tr>
      <th>Date naissance:</th>
      <td><?php echo $personne->getDateNaissance() ?></td>
    </tr>
    <tr>
      <th>Tranche age:</th>
      <td><?php echo $personne->getTrancheAge() ?></td>
    </tr>
    <tr>
      <th>Statut:</th>
      <td><?php echo $personne->getStatut() ?></td>
    </tr>
    <tr>
      <th>Enfants:</th>
      <td><?php echo $personne->getEnfants() ?></td>
    </tr>
    <tr>
      <th>Nb enfants:</th>
      <td><?php echo $personne->getNbEnfants() ?></td>
    </tr>
    <tr>
      <th>Lieu naissance:</th>
      <td><?php echo $personne->getLieuNaissance() ?></td>
    </tr>
    <tr>
      <th>Nationalite:</th>
      <td><?php echo $personne->getNationalite() ?></td>
    </tr>
    <tr>
      <th>Adresse actuelle:</th>
      <td><?php echo $personne->getAdresseActuelle() ?></td>
    </tr>
    <tr>
      <th>Ville actuelle:</th>
      <td><?php echo $personne->getVilleActuelle() ?></td>
    </tr>
    <tr>
      <th>Type logement actuel:</th>
      <td><?php echo $personne->getTypeLogementActuel() ?></td>
    </tr>
    <tr>
      <th>Categorie logement actuel:</th>
      <td><?php echo $personne->getCategorieLogementActuel() ?></td>
    </tr>
    <tr>
      <th>Origine demande:</th>
      <td><?php echo $personne->getOrigineDemande() ?></td>
    </tr>
    <tr>
      <th>Type structure:</th>
      <td><?php echo $personne->getTypeStructure() ?></td>
    </tr>
    <tr>
      <th>Referent:</th>
      <td><?php echo $personne->getReferent() ?></td>
    </tr>
    <tr>
      <th>Loyer actuel:</th>
      <td><?php echo $personne->getLoyerActuel() ?></td>
    </tr>
    <tr>
      <th>Profession actuelle:</th>
      <td><?php echo $personne->getProfessionActuelle() ?></td>
    </tr>
    <tr>
      <th>Employeur actuel:</th>
      <td><?php echo $personne->getEmployeurActuel() ?></td>
    </tr>
    <tr>
      <th>Ville employeur actuel:</th>
      <td><?php echo $personne->getVilleEmployeurActuel() ?></td>
    </tr>
    <tr>
      <th>Dpt employeur actuel:</th>
      <td><?php echo $personne->getDptEmployeurActuel() ?></td>
    </tr>
    <tr>
      <th>Date embauche:</th>
      <td><?php echo $personne->getDateEmbauche() ?></td>
    </tr>
    <tr>
      <th>Type contrat:</th>
      <td><?php echo $personne->getTypeContrat() ?></td>
    </tr>
    <tr>
      <th>Tranche salaire:</th>
      <td><?php echo $personne->getTrancheSalaire() ?></td>
    </tr>
    <tr>
      <th>Salaire exact:</th>
      <td><?php echo $personne->getSalaireExact() ?></td>
    </tr>
    <tr>
      <th>Dettes credits:</th>
      <td><?php echo $personne->getDettesCredits() ?></td>
    </tr>
    <tr>
      <th>Motif recherche logement:</th>
      <td><?php echo $personne->getMotifRechercheLogement() ?></td>
    </tr>
    <tr>
      <th>Observations:</th>
      <td><?php echo $personne->getObservations() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('personne/edit?id='.$personne->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('personne/index') ?>">List</a>
