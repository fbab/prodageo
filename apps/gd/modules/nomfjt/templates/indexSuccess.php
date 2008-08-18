<h1>Nomfjt List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Listnomfjt</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($nomfjtList as $nomfjt): ?>
    <tr>
      <td><a href="<?php echo url_for('nomfjt/show?id='.$nomfjt->getId()) ?>"><?php echo $nomfjt->getId() ?></a></td>
      <td><?php echo $nomfjt->getListnomfjt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<a href="<?php echo url_for('nomfjt/create') ?>">Create</a>
