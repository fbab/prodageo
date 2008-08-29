<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $chapitre->getId() ?></td>
    </tr>
    <tr>
      <th>Anneecreation:</th>
      <td><?php echo $chapitre->getAnneecreation() ?></td>
    </tr>
    <tr>
      <th>Anneesupression:</th>
      <td><?php echo $chapitre->getAnneesupression() ?></td>
    </tr>
    <tr>
      <th>Titrechapitre:</th>
      <td><?php echo $chapitre->getTitrechapitre() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('chapitre/edit?id='.$chapitre->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('chapitre/index') ?>">List</a>
