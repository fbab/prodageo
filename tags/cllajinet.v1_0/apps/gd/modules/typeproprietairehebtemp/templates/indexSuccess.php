<h1>Typeproprietairehebtemp List</h1>

<table class="traitsVisibles">
  <thead>
    <tr>
      <th class="traitsVisibles">Id</th>
      <th class="traitsVisibles">Listtypeproprietairehebtemp</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($typeproprietairehebtempList as $typeproprietairehebtemp): ?>
    <tr>
      <td class="traitsVisibles"><a href="<?php echo url_for('typeproprietairehebtemp/show?id='.$typeproprietairehebtemp->getId()) ?>"><?php echo $typeproprietairehebtemp->getId() ?></a></td>
      <td class="traitsVisibles"><?php echo $typeproprietairehebtemp->getListtypeproprietairehebtemp() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<a href="<?php echo url_for('typeproprietairehebtemp/create') ?>">Create</a>
