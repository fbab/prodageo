<h1>Typestructure List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Listtypestructure</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($typestructureList as $typestructure): ?>
    <tr>
      <td><a href="<?php echo url_for('typestructure/show?id='.$typestructure->getId()) ?>"><?php echo $typestructure->getId() ?></a></td>
      <td><?php echo $typestructure->getListtypestructure() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<a href="<?php echo url_for('typestructure/create') ?>">Create</a>
