<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $nomchrs->getId() ?></td>
    </tr>
    <tr>
      <th>Listnomchrs:</th>
      <td><?php echo $nomchrs->getListnomchrs() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('nomchrs/edit?id='.$nomchrs->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('nomchrs/index') ?>">List</a>
