<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $tranchesalaire->getId() ?></td>
    </tr>
    <tr>
      <th>Listtranchesalaire:</th>
      <td><?php echo $tranchesalaire->getListtranchesalaire() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('tranchesalaire/edit?id='.$tranchesalaire->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('tranchesalaire/index') ?>">List</a>
