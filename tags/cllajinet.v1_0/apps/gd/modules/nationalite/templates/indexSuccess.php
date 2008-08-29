<h1>Nationalite List</h1>

<table class="traitsVisibles">
  <thead>
    <tr>
      <th class="traitsVisibles">Id</th>
      <th class="traitsVisibles">Listnationalite</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($nationaliteList as $nationalite): ?>
    <tr>
      <td class="traitsVisibles"><a href="<?php echo url_for('nationalite/show?id='.$nationalite->getId()) ?>"><?php echo $nationalite->getId() ?></a></td>
      <td class="traitsVisibles"><?php echo $nationalite->getListnationalite() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<a href="<?php echo url_for('nationalite/create') ?>">Create</a>
