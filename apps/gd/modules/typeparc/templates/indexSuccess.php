<h1>Typeparc List</h1>

<table class="traitsVisibles">
  <thead>
    <tr>
      <th class="traitsVisibles">Id</th>
      <th class="traitsVisibles">Listtypeparc</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($typeparcList as $typeparc): ?>
    <tr>
      <td class="traitsVisibles"><a href="<?php echo url_for('typeparc/show?id='.$typeparc->getId()) ?>"><?php echo $typeparc->getId() ?></a></td>
      <td class="traitsVisibles"><?php echo $typeparc->getListtypeparc() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<a href="<?php echo url_for('typeparc/create') ?>">Create</a>
