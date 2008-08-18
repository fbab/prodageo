<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $findossier->getId() ?></td>
    </tr>
    <tr>
      <th>Dossier:</th>
      <td><?php echo $findossier->getDossierId() ?></td>
    </tr>
    <tr>
      <th>Type parc:</th>
      <td><?php echo $findossier->getTypeParc() ?></td>
    </tr>
    <tr>
      <th>Type proprietaire bailleur:</th>
      <td><?php echo $findossier->getTypeProprietaireBailleur() ?></td>
    </tr>
    <tr>
      <th>Nom proprietaire bailleur:</th>
      <td><?php echo $findossier->getNomProprietaireBailleur() ?></td>
    </tr>
    <tr>
      <th>Type condition acces:</th>
      <td><?php echo $findossier->getTypeConditionAcces() ?></td>
    </tr>
    <tr>
      <th>Nom condition acces:</th>
      <td><?php echo $findossier->getNomConditionAcces() ?></td>
    </tr>
    <tr>
      <th>Ville logement:</th>
      <td><?php echo $findossier->getVilleLogement() ?></td>
    </tr>
    <tr>
      <th>Departement logement:</th>
      <td><?php echo $findossier->getDepartementLogement() ?></td>
    </tr>
    <tr>
      <th>Type logement:</th>
      <td><?php echo $findossier->getTypeLogement() ?></td>
    </tr>
    <tr>
      <th>Superficie logement:</th>
      <td><?php echo $findossier->getSuperficieLogement() ?></td>
    </tr>
    <tr>
      <th>Loyer:</th>
      <td><?php echo $findossier->getLoyer() ?></td>
    </tr>
    <tr>
      <th>Edf gdf:</th>
      <td><?php echo $findossier->getEdfGdf() ?></td>
    </tr>
    <tr>
      <th>Chauffage:</th>
      <td><?php echo $findossier->getChauffage() ?></td>
    </tr>
    <tr>
      <th>Difficultes rencontrees:</th>
      <td><?php echo $findossier->getDifficultesRencontrees() ?></td>
    </tr>
    <tr>
      <th>Categorie classement:</th>
      <td><?php echo $findossier->getCategorieClassement() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('findossier/edit?id='.$findossier->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('findossier/index') ?>">List</a>
