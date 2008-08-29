<h1>Stattableau List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Statistiques</th>
      <th>Nomstat</th>
      <th>Valeaursid</th>
      <th>Valeurs</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($stattableauList as $stattableau): ?>
    <tr>
      <td><a href="<?php echo url_for('stattableau/show?id='.$stattableau->getId()) ?>"><?php echo $stattableau->getId() ?></a></td>
      <td><?php echo $stattableau->getStatistiquesId() ?></td>
      <td><?php echo $stattableau->getNomstat() ?></td>
      <td><?php echo $stattableau->getValeaursid() ?></td>
      <td><?php echo $stattableau->getValeurs() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<a href="<?php echo url_for('stattableau/create') ?>">Create</a>
