<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $typeproprietaireprive->getId() ?></td>
    </tr>
    <tr>
      <th>Listtypeproprietaireprive:</th>
      <td><?php echo $typeproprietaireprive->getListtypeproprietaireprive() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('typeproprietaireprive/edit?id='.$typeproprietaireprive->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('typeproprietaireprive/index') ?>">List</a>
