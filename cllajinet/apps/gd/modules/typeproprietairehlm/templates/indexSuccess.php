<h1>Typeproprietairehlm List</h1>

<table class="traitsVisibles">
  <thead>
    <tr>
      <th class="traitsVisibles">Id</th>
      <th class="traitsVisibles">Listtypeproprietairehlm</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($typeproprietairehlmList as $typeproprietairehlm): ?>
    <tr>
      <td class="traitsVisibles"><a href="<?php echo url_for('typeproprietairehlm/show?id='.$typeproprietairehlm->getId()) ?>"><?php echo $typeproprietairehlm->getId() ?></a></td>
      <td class="traitsVisibles"><?php echo $typeproprietairehlm->getListtypeproprietairehlm() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<a href="<?php echo url_for('typeproprietairehlm/create') ?>">Create</a>
