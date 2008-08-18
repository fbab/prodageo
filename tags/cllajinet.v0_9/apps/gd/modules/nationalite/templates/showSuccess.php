<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $nationalite->getId() ?></td>
    </tr>
    <tr>
      <th>Listnationalite:</th>
      <td><?php echo $nationalite->getListnationalite() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('nationalite/edit?id='.$nationalite->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('nationalite/index') ?>">List</a>
