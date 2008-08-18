<?php $nationalite = $form->getObject() ?>
<h1><?php echo $nationalite->isNew() ? 'New' : 'Edit' ?> Nationalite</h1>

<form action="<?php echo url_for('nationalite/update'.(!$nationalite->isNew() ? '?id='.$nationalite->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          &nbsp;<a href="<?php echo url_for('nationalite/index') ?>">Cancel</a>
          <?php if (!$nationalite->isNew()): ?>
            &nbsp;<?php echo link_to('Delete', 'nationalite/delete?id='.$nationalite->getId(), array('post' => true, 'confirm' => 'Are you sure?')) ?>
          <?php endif; ?>
          <input type="submit" value="Save" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <tr>
        <th><label for="nationalite_listnationalite">Listnationalite</label></th>
        <td>
          <?php echo $form['listnationalite']->renderError() ?>
          <?php echo $form['listnationalite'] ?>

        <?php echo $form['id'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</form>
<a href="<?php echo url_for('nationalite/create/index') ?>">ajouter</a>
<a href="<?php echo url_for('nationalite/index') ?>">retour liste</a>
