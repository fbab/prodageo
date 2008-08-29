<h1>Chapitre List</h1>

<table class="traitsVisibles">
  <thead>
    <tr>
      <th class="traitsVisibles">Id</th>
      <th class="traitsVisibles">Anneecreation</th>
      <th class="traitsVisibles">Anneesupression</th>
      <th class="traitsVisibles">Titrechapitre</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($chapitreList as $chapitre): ?>
    <tr>
      <td class="traitsVisibles"><a href="<?php echo url_for('chapitre/show?id='.$chapitre->getId()) ?>"><?php echo $chapitre->getId() ?></a></td>
      <td class="traitsVisibles"><?php echo $chapitre->getAnneecreation() ?></td>
      <td class="traitsVisibles"><?php echo $chapitre->getAnneesupression() ?></td>
      <td class="traitsVisibles"><?php echo $chapitre->getTitrechapitre() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<a href="<?php echo url_for('chapitre/create') ?>">Create</a>
