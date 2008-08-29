<h1>Conditionsacces List</h1>

<table class="traitsVisibles">
  <thead>
    <tr>
      <th class="traitsVisibles">Id</th>
      <th class="traitsVisibles">Listconditionsacces</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($conditionsaccesList as $conditionsacces): ?>
    <tr>
      <td class="traitsVisibles"><a href="<?php echo url_for('conditionsacces/show?id='.$conditionsacces->getId()) ?>"><?php echo $conditionsacces->getId() ?></a></td>
      <td class="traitsVisibles"><?php echo $conditionsacces->getListconditionsacces() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<a href="<?php echo url_for('conditionsacces/create') ?>">Create</a>
