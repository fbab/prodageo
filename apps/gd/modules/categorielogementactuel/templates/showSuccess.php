<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $categorielogementactuel->getId() ?></td>
    </tr>
    <tr>
      <th>Listcategorielogementactuel:</th>
      <td><?php echo $categorielogementactuel->getListcategorielogementactuel() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('categorielogementactuel/edit?id='.$categorielogementactuel->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('categorielogementactuel/index') ?>">List</a>
