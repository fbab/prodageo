<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $nomfjt->getId() ?></td>
    </tr>
    <tr>
      <th>Listnomfjt:</th>
      <td><?php echo $nomfjt->getListnomfjt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('nomfjt/edit?id='.$nomfjt->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('nomfjt/index') ?>">List</a>
