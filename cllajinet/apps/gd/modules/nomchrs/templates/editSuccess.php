<?php $nomchrs = $form->getObject() ?>
<h1><?php echo $nomchrs->isNew() ? 'New' : 'Edit' ?> Nomchrs</h1>

<form action="<?php echo url_for('nomchrs/update'.(!$nomchrs->isNew() ? '?id='.$nomchrs->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          &nbsp;<a href="<?php echo url_for('nomchrs/index') ?>">Cancel</a>
          <?php if (!$nomchrs->isNew()): ?>
            &nbsp;<?php echo link_to('Delete', 'nomchrs/delete?id='.$nomchrs->getId(), array('post' => true, 'confirm' => 'Are you sure?')) ?>
          <?php endif; ?>
          <input type="submit" value="Save" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <tr>
        <th><label for="nomchrs_listnomchrs">Listnomchrs</label></th>
        <td>
          <?php echo $form['listnomchrs']->renderError() ?>
          <?php echo $form['listnomchrs'] ?>

        <?php echo $form['id'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</form>
<a href="<?php echo url_for('nomchrs/create/index') ?>">ajouter</a>
<a href="<?php echo url_for('nomchrs/index') ?>">retour liste</a>
