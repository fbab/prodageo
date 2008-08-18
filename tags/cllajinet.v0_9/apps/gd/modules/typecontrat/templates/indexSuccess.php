<h1>Typecontrat List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Listtypecontrat</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($typecontratList as $typecontrat): ?>
    <tr>
      <td><a href="<?php echo url_for('typecontrat/show?id='.$typecontrat->getId()) ?>"><?php echo $typecontrat->getId() ?></a></td>
      <td><?php echo $typecontrat->getListtypecontrat() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<a href="<?php echo url_for('typecontrat/create') ?>">Create</a>
