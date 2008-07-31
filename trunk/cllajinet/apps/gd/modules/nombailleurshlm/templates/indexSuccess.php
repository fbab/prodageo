<h1>Nombailleurshlm List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Listnombailleurshlm</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($nombailleurshlmList as $nombailleurshlm): ?>
    <tr>
      <td><a href="<?php echo url_for('nombailleurshlm/show?id='.$nombailleurshlm->getId()) ?>"><?php echo $nombailleurshlm->getId() ?></a></td>
      <td><?php echo $nombailleurshlm->getListnombailleurshlm() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<a href="<?php echo url_for('nombailleurshlm/create') ?>">Create</a>
