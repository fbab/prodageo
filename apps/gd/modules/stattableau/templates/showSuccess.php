<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $stattableau->getId() ?></td>
    </tr>
    <tr>
      <th>Statistiques:</th>
      <td><?php echo $stattableau->getStatistiquesId() ?></td>
    </tr>
    <tr>
      <th>Nomstat:</th>
      <td><?php echo $stattableau->getNomstat() ?></td>
    </tr>
    <tr>
      <th>Valeaursid:</th>
      <td><?php echo $stattableau->getValeaursid() ?></td>
    </tr>
    <tr>
      <th>Valeurs:</th>
      <td><?php echo $stattableau->getValeurs() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('stattableau/edit?id='.$stattableau->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('stattableau/index') ?>">List</a>
