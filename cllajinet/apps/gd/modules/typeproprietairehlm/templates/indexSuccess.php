<h1>Typeproprietairehlm List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Listtypeproprietairehlm</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($typeproprietairehlmList as $typeproprietairehlm): ?>
    <tr>
      <td><a href="<?php echo url_for('typeproprietairehlm/show?id='.$typeproprietairehlm->getId()) ?>"><?php echo $typeproprietairehlm->getId() ?></a></td>
      <td><?php echo $typeproprietairehlm->getListtypeproprietairehlm() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<a href="<?php echo url_for('typeproprietairehlm/create') ?>">Create</a>
