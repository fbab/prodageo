<?php $conditionsacces = $form->getObject() ?>
<h1><?php echo $conditionsacces->isNew() ? 'New' : 'Edit' ?> Conditionsacces</h1>

<form action="<?php echo url_for('conditionsacces/update'.(!$conditionsacces->isNew() ? '?id='.$conditionsacces->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          &nbsp;<a href="<?php echo url_for('conditionsacces/index') ?>">Cancel</a>
          <?php if (!$conditionsacces->isNew()): ?>
            &nbsp;<?php echo link_to('Delete', 'conditionsacces/delete?id='.$conditionsacces->getId(), array('post' => true, 'confirm' => 'Are you sure?')) ?>
          <?php endif; ?>
          <input type="submit" value="Save" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <tr>
        <th><label for="conditionsacces_listconditionsacces">Listconditionsacces</label></th>
        <td>
          <?php echo $form['listconditionsacces']->renderError() ?>
          <?php echo $form['listconditionsacces'] ?>

        <?php echo $form['id'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</form>
<a href="<?php echo url_for('conditionsacces/create/index') ?>">ajouter</a>
<a href="<?php echo url_for('conditionsacces/index') ?>">retour liste</a>
