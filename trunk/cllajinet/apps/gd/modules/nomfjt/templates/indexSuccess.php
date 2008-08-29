<h1>Nomfjt List</h1>

<table class="traitsVisibles">
  <thead>
    <tr>
      <th class="traitsVisibles">Id</th>
      <th class="traitsVisibles">Listnomfjt</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($nomfjtList as $nomfjt): ?>
    <tr>
      <td class="traitsVisibles"><a href="<?php echo url_for('nomfjt/show?id='.$nomfjt->getId()) ?>"><?php echo $nomfjt->getId() ?></a></td>
      <td class="traitsVisibles"><?php echo $nomfjt->getListnomfjt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<a href="<?php echo url_for('nomfjt/create') ?>">Create</a>
