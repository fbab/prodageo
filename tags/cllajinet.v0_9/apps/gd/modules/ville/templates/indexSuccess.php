<h1>Ville List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Listville</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($villeList as $ville): ?>
    <tr>
      <td><a href="<?php echo url_for('ville/show?id='.$ville->getId()) ?>"><?php echo $ville->getId() ?></a></td>
      <td><?php echo $ville->getListville() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<a href="<?php echo url_for('ville/create') ?>">Create</a>
