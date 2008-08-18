<h1>Nomchrs List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Listnomchrs</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($nomchrsList as $nomchrs): ?>
    <tr>
      <td><a href="<?php echo url_for('nomchrs/show?id='.$nomchrs->getId()) ?>"><?php echo $nomchrs->getId() ?></a></td>
      <td><?php echo $nomchrs->getListnomchrs() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<a href="<?php echo url_for('nomchrs/create') ?>">Create</a>
