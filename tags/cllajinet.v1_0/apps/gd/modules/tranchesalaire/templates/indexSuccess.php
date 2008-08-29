<h1>Tranchesalaire List</h1>

<table class="traitsVisibles">
  <thead>
    <tr>
      <th class="traitsVisibles">Id</th>
      <th class="traitsVisibles">Listtranchesalaire</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($tranchesalaireList as $tranchesalaire): ?>
    <tr>
      <td class="traitsVisibles"><a href="<?php echo url_for('tranchesalaire/show?id='.$tranchesalaire->getId()) ?>"><?php echo $tranchesalaire->getId() ?></a></td>
      <td class="traitsVisibles"><?php echo $tranchesalaire->getListtranchesalaire() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<a href="<?php echo url_for('tranchesalaire/create') ?>">Create</a>
