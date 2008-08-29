<h1>Dossier List</h1>

<table class="traitsVisibles">
  <thead>
    <tr>
      <th class="traitsVisibles">Id</th>
      <th class="traitsVisibles">Etat</th>
      <th class="traitsVisibles">Date ouverture dossier</th>
      <th class="traitsVisibles">Date cloture dossier</th>
      <th class="traitsVisibles">Type dossier</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($dossierList as $dossier): ?>
    <tr>
      <td class="traitsVisibles"><a href="<?php echo url_for('dossier/show?id='.$dossier->getId()) ?>"><?php echo $dossier->getId() ?></a></td>
      <td class="traitsVisibles"><?php echo $dossier->getEtat() ?></td>
      <td class="traitsVisibles"><?php echo $dossier->getDateOuvertureDossier() ?></td>
      <td class="traitsVisibles"><?php echo $dossier->getDateClotureDossier() ?></td>
      <td class="traitsVisibles"><?php echo $dossier->getTypeDossier() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<a href="<?php echo url_for('dossier/create') ?>">Create</a>
