<?php $categorielogementactuel = $form->getObject() ?>
<h1><?php echo $categorielogementactuel->isNew() ? 'New' : 'Edit' ?> Categorielogementactuel</h1>

<form action="<?php echo url_for('categorielogementactuel/update'.(!$categorielogementactuel->isNew() ? '?id='.$categorielogementactuel->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          &nbsp;<a href="<?php echo url_for('categorielogementactuel/index') ?>">Cancel</a>
          <?php if (!$categorielogementactuel->isNew()): ?>
            &nbsp;<?php echo link_to('Delete', 'categorielogementactuel/delete?id='.$categorielogementactuel->getId(), array('post' => true, 'confirm' => 'Are you sure?')) ?>
          <?php endif; ?>
          <input type="submit" value="Save" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <tr>
        <th><label for="categorielogementactuel_listcategorielogementactuel">Listcategorielogementactuel</label></th>
        <td>
          <?php echo $form['listcategorielogementactuel']->renderError() ?>
          <?php echo $form['listcategorielogementactuel'] ?>

        <?php echo $form['id'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</form>
<a href="<?php echo url_for('categorielogementactuel/create/index') ?>">ajouter</a>
<a href="<?php echo url_for('categorielogementactuel/index') ?>">retour liste</a>
