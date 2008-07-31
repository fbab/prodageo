<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $nomlocapass->getId() ?></td>
    </tr>
    <tr>
      <th>Listnomlocapass:</th>
      <td><?php echo $nomlocapass->getListnomlocapass() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('nomlocapass/edit?id='.$nomlocapass->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('nomlocapass/index') ?>">List</a>
