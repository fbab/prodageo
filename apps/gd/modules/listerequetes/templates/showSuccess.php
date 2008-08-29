<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $listerequetes->getId() ?></td>
    </tr>
    <tr>
      <th>Listrequetes:</th>
      <td><?php echo $listerequetes->getListrequetes() ?></td>
    </tr>
    <tr>
      <th>Titrerequetes:</th>
      <td><?php echo $listerequetes->getTitrerequetes() ?></td>
    </tr>
    <tr>
      <th>Chapitre:</th>
      <td><?php echo $listerequetes->getChapitreId() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('listerequetes/edit?id='.$listerequetes->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('listerequetes/index') ?>">List</a>
