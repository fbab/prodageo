<h1>Tranchesalaire List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Listtranchesalaire</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($tranchesalaireList as $tranchesalaire): ?>
    <tr>
      <td><a href="<?php echo url_for('tranchesalaire/show?id='.$tranchesalaire->getId()) ?>"><?php echo $tranchesalaire->getId() ?></a></td>
      <td><?php echo $tranchesalaire->getListtranchesalaire() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<a href="<?php echo url_for('tranchesalaire/create') ?>">Create</a>
