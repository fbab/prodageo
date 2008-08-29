<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $typeparc->getId() ?></td>
    </tr>
    <tr>
      <th>Listtypeparc:</th>
      <td><?php echo $typeparc->getListtypeparc() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('typeparc/edit?id='.$typeparc->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('typeparc/index') ?>">List</a>
