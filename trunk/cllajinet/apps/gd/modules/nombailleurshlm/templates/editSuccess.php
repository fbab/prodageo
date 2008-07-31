<?php $nombailleurshlm = $form->getObject() ?>
<h1><?php echo $nombailleurshlm->isNew() ? 'New' : 'Edit' ?> Nombailleurshlm</h1>

<form action="<?php echo url_for('nombailleurshlm/update'.(!$nombailleurshlm->isNew() ? '?id='.$nombailleurshlm->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          &nbsp;<a href="<?php echo url_for('nombailleurshlm/index') ?>">Cancel</a>
          <?php if (!$nombailleurshlm->isNew()): ?>
            &nbsp;<?php echo link_to('Delete', 'nombailleurshlm/delete?id='.$nombailleurshlm->getId(), array('post' => true, 'confirm' => 'Are you sure?')) ?>
          <?php endif; ?>
          <input type="submit" value="Save" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <tr>
        <th><label for="nombailleurshlm_listnombailleurshlm">Listnombailleurshlm</label></th>
        <td>
          <?php echo $form['listnombailleurshlm']->renderError() ?>
          <?php echo $form['listnombailleurshlm'] ?>

        <?php echo $form['id'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</form>
<a href="<?php echo url_for('nombailleurshlm/create/index') ?>">ajouter</a>
<a href="<?php echo url_for('nombailleurshlm/index') ?>">retour liste</a>
