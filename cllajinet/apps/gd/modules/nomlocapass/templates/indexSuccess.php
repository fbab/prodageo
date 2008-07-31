<h1>Nomlocapass List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Listnomlocapass</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($nomlocapassList as $nomlocapass): ?>
    <tr>
      <td><a href="<?php echo url_for('nomlocapass/show?id='.$nomlocapass->getId()) ?>"><?php echo $nomlocapass->getId() ?></a></td>
      <td><?php echo $nomlocapass->getListnomlocapass() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<a href="<?php echo url_for('nomlocapass/create') ?>">Create</a>
