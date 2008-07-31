<?php $typeparc = $form->getObject() ?>
<h1><?php echo $typeparc->isNew() ? 'New' : 'Edit' ?> Typeparc</h1>

<form action="<?php echo url_for('typeparc/update'.(!$typeparc->isNew() ? '?id='.$typeparc->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          &nbsp;<a href="<?php echo url_for('typeparc/index') ?>">Cancel</a>
          <?php if (!$typeparc->isNew()): ?>
            &nbsp;<?php echo link_to('Delete', 'typeparc/delete?id='.$typeparc->getId(), array('post' => true, 'confirm' => 'Are you sure?')) ?>
          <?php endif; ?>
          <input type="submit" value="Save" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <tr>
        <th><label for="typeparc_listtypeparc">Listtypeparc</label></th>
        <td>
          <?php echo $form['listtypeparc']->renderError() ?>
          <?php echo $form['listtypeparc'] ?>

        <?php echo $form['id'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</form>
<a href="<?php echo url_for('typeparc/create/index') ?>">ajouter</a>
<a href="<?php echo url_for('typeparc/index') ?>">retour liste</a>
