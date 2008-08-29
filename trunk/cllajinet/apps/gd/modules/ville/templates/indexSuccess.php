<h1>Ville List</h1>

<table class="traitsVisibles">
  <thead>
    <tr>
      <th class="traitsVisibles">Id</th>
      <th class="traitsVisibles">Listville</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($villeList as $ville): ?>
    <tr>
      <td class="traitsVisibles"><a href="<?php echo url_for('ville/show?id='.$ville->getId()) ?>"><?php echo $ville->getId() ?></a></td>
      <td class="traitsVisibles"><?php echo $ville->getListville() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<a href="<?php echo url_for('ville/create') ?>">Create</a>
