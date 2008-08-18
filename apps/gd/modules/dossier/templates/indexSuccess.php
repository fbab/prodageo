<h1>Dossier List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Date ouverture dossier</th>
      <th>Date cloture dossier</th>
      <th>Type dossier</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($dossierList as $dossier): ?>
    <tr>
      <td><a href="<?php echo url_for('dossier/show?id='.$dossier->getId()) ?>"><?php echo $dossier->getId() ?></a></td>
      <td><?php echo $dossier->getDateOuvertureDossier() ?></td>
      <td><?php echo $dossier->getDateClotureDossier() ?></td>
      <td><?php echo $dossier->getTypeDossier() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<a href="<?php echo url_for('dossier/create') ?>">Create</a>
