<h1>Listerequetes List</h1>

<table class="traitsVisibles">
  <thead>
    <tr>
      <th class="traitsVisibles">Id</th>
      <th class="traitsVisibles">Listrequetes</th>
      <th class="traitsVisibles">Titrerequetes</th>
      <th class="traitsVisibles">Ordrerequetes</th>
      <th class="traitsVisibles">Chapitre</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($listerequetesList as $listerequetes): ?>
    <tr>
      <td class="traitsVisibles"><a href="<?php echo url_for('listerequetes/show?id='.$listerequetes->getId()) ?>"><?php echo $listerequetes->getId() ?></a></td>
      <td class="traitsVisibles"><?php echo $listerequetes->getListrequetes() ?></td>
      <td class="traitsVisibles"><?php echo $listerequetes->getTitrerequetes() ?></td>
      <td class="traitsVisibles"><?php echo $listerequetes->getOrdrerequetes() ?></td>
      <td class="traitsVisibles"><?php echo $listerequetes->getChapitreId() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<a href="<?php echo url_for('listerequetes/create') ?>">Create</a>
