<h1>Typelogement List</h1>

<table class="traitsVisibles">
  <thead>
    <tr>
      <th class="traitsVisibles">Id</th>
      <th class="traitsVisibles">Listtypelogement</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($typelogementList as $typelogement): ?>
    <tr>
      <td class="traitsVisibles"><a href="<?php echo url_for('typelogement/show?id='.$typelogement->getId()) ?>"><?php echo $typelogement->getId() ?></a></td>
      <td class="traitsVisibles"><?php echo $typelogement->getListtypelogement() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<a href="<?php echo url_for('typelogement/create') ?>">Create</a>
