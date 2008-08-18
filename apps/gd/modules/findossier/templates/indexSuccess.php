<h1>Findossier List</h1>
<table>
  <thead>
    <tr>
      <th>Id</th>
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
      <th>Categorie classement</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($findossierList as $findossier): ?>
    <tr>
      <td><a href="<?php echo url_for('findossier/show?id='.$findossier->getId()) ?>"><?php echo $findossier->getId() ?></a></td>
      <td><?php echo $findossier->getDossierId() ?></td>
      <td><?php echo $findossier->getTypeParc() ?></td>
      <td><?php echo $findossier->getTypeProprietaireBailleur() ?></td>
      <td><?php echo $findossier->getNomProprietaireBailleur() ?></td>
      <td><?php echo $findossier->getTypeConditionAcces() ?></td>
      <td><?php echo $findossier->getNomConditionAcces() ?></td>
      <td><?php echo $findossier->getVilleLogement() ?></td>
      <td><?php echo $findossier->getDepartementLogement() ?></td>
      <td><?php echo $findossier->getTypeLogement() ?></td>
      <td><?php echo $findossier->getSuperficieLogement() ?></td>
      <td><?php echo $findossier->getLoyer() ?></td>
      <td><?php echo $findossier->getEdfGdf() ?></td>
      <td><?php echo $findossier->getChauffage() ?></td>
      <td><?php echo $findossier->getDifficultesRencontrees() ?></td>
      <td><?php echo $findossier->getCategorieClassement() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<a href="<?php echo url_for('findossier/create') ?>">Create</a>
