<h1>Nomlocapass List</h1>

<table class="traitsVisibles">
  <thead>
    <tr>
      <th class="traitsVisibles">Id</th>
      <th class="traitsVisibles">Listnomlocapass</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($nomlocapassList as $nomlocapass): ?>
    <tr>
      <td class="traitsVisibles"><a href="<?php echo url_for('nomlocapass/show?id='.$nomlocapass->getId()) ?>"><?php echo $nomlocapass->getId() ?></a></td>
      <td class="traitsVisibles"><?php echo $nomlocapass->getListnomlocapass() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<a href="<?php echo url_for('nomlocapass/create') ?>">Create</a>
