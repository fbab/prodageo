<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $typelogement->getId() ?></td>
    </tr>
    <tr>
      <th>Listtypelogement:</th>
      <td><?php echo $typelogement->getListtypelogement() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('typelogement/edit?id='.$typelogement->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('typelogement/index') ?>">List</a>
