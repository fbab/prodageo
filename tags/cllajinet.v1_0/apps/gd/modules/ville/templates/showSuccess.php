<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $ville->getId() ?></td>
    </tr>
    <tr>
      <th>Listville:</th>
      <td><?php echo $ville->getListville() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('ville/edit?id='.$ville->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('ville/index') ?>">List</a>
