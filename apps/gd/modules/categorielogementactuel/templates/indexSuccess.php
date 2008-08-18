<h1>Categorielogementactuel List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Listcategorielogementactuel</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($categorielogementactuelList as $categorielogementactuel): ?>
    <tr>
      <td><a href="<?php echo url_for('categorielogementactuel/show?id='.$categorielogementactuel->getId()) ?>"><?php echo $categorielogementactuel->getId() ?></a></td>
      <td><?php echo $categorielogementactuel->getListcategorielogementactuel() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<a href="<?php echo url_for('categorielogementactuel/create') ?>">Create</a>
