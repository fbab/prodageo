<?php $typelogement = $form->getObject() ?>
<h1><?php echo $typelogement->isNew() ? 'New' : 'Edit' ?> Typelogement</h1>

<form action="<?php echo url_for('typelogement/update'.(!$typelogement->isNew() ? '?id='.$typelogement->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          &nbsp;<a href="<?php echo url_for('typelogement/index') ?>">Cancel</a>
          <?php if (!$typelogement->isNew()): ?>
            &nbsp;<?php echo link_to('Delete', 'typelogement/delete?id='.$typelogement->getId(), array('post' => true, 'confirm' => 'Are you sure?')) ?>
          <?php endif; ?>
          <input type="submit" value="Save" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <tr>
        <th><label for="typelogement_listtypelogement">Listtypelogement</label></th>
        <td>
          <?php echo $form['listtypelogement']->renderError() ?>
          <?php echo $form['listtypelogement'] ?>

        <?php echo $form['id'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</form>
<a href="<?php echo url_for('typelogement/create/index') ?>">ajouter</a>
<a href="<?php echo url_for('typelogement/index') ?>">retour liste</a>
