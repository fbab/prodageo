<h1>Typeproprietairehebtemp List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Listtypeproprietairehebtemp</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($typeproprietairehebtempList as $typeproprietairehebtemp): ?>
    <tr>
      <td><a href="<?php echo url_for('typeproprietairehebtemp/show?id='.$typeproprietairehebtemp->getId()) ?>"><?php echo $typeproprietairehebtemp->getId() ?></a></td>
      <td><?php echo $typeproprietairehebtemp->getListtypeproprietairehebtemp() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<a href="<?php echo url_for('typeproprietairehebtemp/create') ?>">Create</a>
