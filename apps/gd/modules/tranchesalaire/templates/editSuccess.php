<?php $tranchesalaire = $form->getObject() ?>
<h1><?php echo $tranchesalaire->isNew() ? 'New' : 'Edit' ?> Tranchesalaire</h1>

<form action="<?php echo url_for('tranchesalaire/update'.(!$tranchesalaire->isNew() ? '?id='.$tranchesalaire->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          &nbsp;<a href="<?php echo url_for('tranchesalaire/index') ?>">Cancel</a>
          <?php if (!$tranchesalaire->isNew()): ?>
            &nbsp;<?php echo link_to('Delete', 'tranchesalaire/delete?id='.$tranchesalaire->getId(), array('post' => true, 'confirm' => 'Are you sure?')) ?>
          <?php endif; ?>
          <input type="submit" value="Save" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <tr>
        <th><label for="tranchesalaire_listtranchesalaire">Listtranchesalaire</label></th>
        <td>
          <?php echo $form['listtranchesalaire']->renderError() ?>
          <?php echo $form['listtranchesalaire'] ?>

        <?php echo $form['id'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</form>
<a href="<?php echo url_for('tranchesalaire/create/index') ?>">ajouter</a>
<a href="<?php echo url_for('tranchesalaire/index') ?>">retour liste</a>

