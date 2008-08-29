<h1>Typeproprietaireprive List</h1>

<table class="traitsVisibles">
  <thead>
    <tr>
      <th class="traitsVisibles">Id</th>
      <th class="traitsVisibles">Listtypeproprietaireprive</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($typeproprietairepriveList as $typeproprietaireprive): ?>
    <tr>
      <td class="traitsVisibles"><a href="<?php echo url_for('typeproprietaireprive/show?id='.$typeproprietaireprive->getId()) ?>"><?php echo $typeproprietaireprive->getId() ?></a></td>
      <td class="traitsVisibles"><?php echo $typeproprietaireprive->getListtypeproprietaireprive() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<a href="<?php echo url_for('typeproprietaireprive/create') ?>">Create</a>
