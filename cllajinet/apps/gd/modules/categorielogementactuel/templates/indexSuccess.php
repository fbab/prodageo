<h1>Categorielogementactuel List</h1>

<table class="traitsVisibles">
  <thead>
    <tr>
      <th class="traitsVisibles">Id</th>
      <th class="traitsVisibles">Listcategorielogementactuel</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($categorielogementactuelList as $categorielogementactuel): ?>
    <tr>
      <td class="traitsVisibles"><a href="<?php echo url_for('categorielogementactuel/show?id='.$categorielogementactuel->getId()) ?>"><?php echo $categorielogementactuel->getId() ?></a></td>
      <td class="traitsVisibles"><?php echo $categorielogementactuel->getListcategorielogementactuel() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<a href="<?php echo url_for('categorielogementactuel/create') ?>">Create</a>
