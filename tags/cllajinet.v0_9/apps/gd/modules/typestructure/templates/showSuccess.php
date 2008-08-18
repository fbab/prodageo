<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $typestructure->getId() ?></td>
    </tr>
    <tr>
      <th>Listtypestructure:</th>
      <td><?php echo $typestructure->getListtypestructure() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('typestructure/edit?id='.$typestructure->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('typestructure/index') ?>">List</a>
