<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $typeproprietairehebtemp->getId() ?></td>
    </tr>
    <tr>
      <th>Listtypeproprietairehebtemp:</th>
      <td><?php echo $typeproprietairehebtemp->getListtypeproprietairehebtemp() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('typeproprietairehebtemp/edit?id='.$typeproprietairehebtemp->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('typeproprietairehebtemp/index') ?>">List</a>
