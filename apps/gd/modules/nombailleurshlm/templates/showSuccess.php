<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $nombailleurshlm->getId() ?></td>
    </tr>
    <tr>
      <th>Listnombailleurshlm:</th>
      <td><?php echo $nombailleurshlm->getListnombailleurshlm() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('nombailleurshlm/edit?id='.$nombailleurshlm->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('nombailleurshlm/index') ?>">List</a>
