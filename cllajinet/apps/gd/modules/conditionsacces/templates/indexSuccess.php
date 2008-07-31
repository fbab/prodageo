<h1>Conditionsacces List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Listconditionsacces</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($conditionsaccesList as $conditionsacces): ?>
    <tr>
      <td><a href="<?php echo url_for('conditionsacces/show?id='.$conditionsacces->getId()) ?>"><?php echo $conditionsacces->getId() ?></a></td>
      <td><?php echo $conditionsacces->getListconditionsacces() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<a href="<?php echo url_for('conditionsacces/create') ?>">Create</a>
