<h1>Typecontrat List</h1>

<table class="traitsVisibles"> 
  <thead>
    <tr>
      <th class="traitsVisibles">Id</th>
      <th class="traitsVisibles">Listtypecontrat</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($typecontratList as $typecontrat): ?>
    <tr>
      <td class="traitsVisibles"><a href="<?php echo url_for('typecontrat/show?id='.$typecontrat->getId()) ?>"><?php echo $typecontrat->getId() ?></a></td>
      <td class="traitsVisibles"><?php echo $typecontrat->getListtypecontrat() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<a href="<?php echo url_for('typecontrat/create') ?>">Create</a>
