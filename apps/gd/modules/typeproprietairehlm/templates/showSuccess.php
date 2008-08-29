<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $typeproprietairehlm->getId() ?></td>
    </tr>
    <tr>
      <th>Listtypeproprietairehlm:</th>
      <td><?php echo $typeproprietairehlm->getListtypeproprietairehlm() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('typeproprietairehlm/edit?id='.$typeproprietairehlm->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('typeproprietairehlm/index') ?>">List</a>
