<h1>Typeproprietaireprive List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Listtypeproprietaireprive</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($typeproprietairepriveList as $typeproprietaireprive): ?>
    <tr>
      <td><a href="<?php echo url_for('typeproprietaireprive/show?id='.$typeproprietaireprive->getId()) ?>"><?php echo $typeproprietaireprive->getId() ?></a></td>
      <td><?php echo $typeproprietaireprive->getListtypeproprietaireprive() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<a href="<?php echo url_for('typeproprietaireprive/create') ?>">Create</a>
