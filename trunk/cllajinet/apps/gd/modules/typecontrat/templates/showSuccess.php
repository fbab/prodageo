<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $typecontrat->getId() ?></td>
    </tr>
    <tr>
      <th>Listtypecontrat:</th>
      <td><?php echo $typecontrat->getListtypecontrat() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('typecontrat/edit?id='.$typecontrat->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('typecontrat/index') ?>">List</a>
