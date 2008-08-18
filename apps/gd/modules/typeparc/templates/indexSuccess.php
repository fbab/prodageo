<h1>Typeparc List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Listtypeparc</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($typeparcList as $typeparc): ?>
    <tr>
      <td><a href="<?php echo url_for('typeparc/show?id='.$typeparc->getId()) ?>"><?php echo $typeparc->getId() ?></a></td>
      <td><?php echo $typeparc->getListtypeparc() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<a href="<?php echo url_for('typeparc/create') ?>">Create</a>
