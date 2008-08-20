<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $dossier->getId() ?></td>
    </tr>
    <tr>
      <th>Etat:</th>
      <td><?php echo $dossier->getEtat() ?></td>
    </tr>
    <tr>
      <th>Date ouverture dossier:</th>
      <td><?php echo $dossier->getDateOuvertureDossier() ?></td>
    </tr>
    <tr>
      <th>Date cloture dossier:</th>
      <td><?php echo $dossier->getDateClotureDossier() ?></td>
    </tr>
    <tr>
      <th>Type dossier:</th>
      <td><?php echo $dossier->getTypeDossier() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('dossier/edit?id='.$dossier->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('dossier/index') ?>">List</a>
