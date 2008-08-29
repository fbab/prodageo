<h1>Typestructure List</h1>

<table class="traitsVisibles">
  <thead>
    <tr>
      <th class="traitsVisibles">Id</th>
      <th class="traitsVisibles">Listtypestructure</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($typestructureList as $typestructure): ?>
    <tr>
      <td class="traitsVisibles"><a href="<?php echo url_for('typestructure/show?id='.$typestructure->getId()) ?>"><?php echo $typestructure->getId() ?></a></td>
      <td class="traitsVisibles"><?php echo $typestructure->getListtypestructure() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<a href="<?php echo url_for('typestructure/create') ?>">Create</a>
