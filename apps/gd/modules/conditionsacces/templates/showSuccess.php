<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $conditionsacces->getId() ?></td>
    </tr>
    <tr>
      <th>Listconditionsacces:</th>
      <td><?php echo $conditionsacces->getListconditionsacces() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('conditionsacces/edit?id='.$conditionsacces->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('conditionsacces/index') ?>">List</a>
