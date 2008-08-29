<h1>Nombailleurshlm List</h1>

<table class="traitsVisibles">
  <thead>
    <tr>
      <th class="traitsVisibles">Id</th>
      <th class="traitsVisibles">Listnombailleurshlm</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($nombailleurshlmList as $nombailleurshlm): ?>
    <tr>
      <td class="traitsVisibles"><a href="<?php echo url_for('nombailleurshlm/show?id='.$nombailleurshlm->getId()) ?>"><?php echo $nombailleurshlm->getId() ?></a></td>
      <td class="traitsVisibles"><?php echo $nombailleurshlm->getListnombailleurshlm() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<a href="<?php echo url_for('nombailleurshlm/create') ?>">Create</a>
