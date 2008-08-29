<h1>Nomchrs List</h1>

<table class="traitsVisibles">
  <thead>
    <tr>
      <th class="traitsVisibles">Id</th>
      <th class="traitsVisibles">Listnomchrs</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($nomchrsList as $nomchrs): ?>
    <tr>
      <td class="traitsVisibles"><a href="<?php echo url_for('nomchrs/show?id='.$nomchrs->getId()) ?>"><?php echo $nomchrs->getId() ?></a></td>
      <td class="traitsVisibles"><?php echo $nomchrs->getListnomchrs() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<a href="<?php echo url_for('nomchrs/create') ?>">Create</a>
