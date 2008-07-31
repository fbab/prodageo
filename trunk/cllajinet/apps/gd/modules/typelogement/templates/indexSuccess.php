<h1>Typelogement List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Listtypelogement</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($typelogementList as $typelogement): ?>
    <tr>
      <td><a href="<?php echo url_for('typelogement/show?id='.$typelogement->getId()) ?>"><?php echo $typelogement->getId() ?></a></td>
      <td><?php echo $typelogement->getListtypelogement() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<a href="<?php echo url_for('typelogement/create') ?>">Create</a>
