<h1>Nationalite List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Listnationalite</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($nationaliteList as $nationalite): ?>
    <tr>
      <td><a href="<?php echo url_for('nationalite/show?id='.$nationalite->getId()) ?>"><?php echo $nationalite->getId() ?></a></td>
      <td><?php echo $nationalite->getListnationalite() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<a href="<?php echo url_for('nationalite/create') ?>">Create</a>
