<?php $ville = $form->getObject() ?>
<h1><?php echo $ville->isNew() ? 'New' : 'Edit' ?> Ville</h1>

<form action="<?php echo url_for('ville/update'.(!$ville->isNew() ? '?id='.$ville->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          &nbsp;<a href="<?php echo url_for('ville/index') ?>">Cancel</a>
          <?php if (!$ville->isNew()): ?>
            &nbsp;<?php echo link_to('Delete', 'ville/delete?id='.$ville->getId(), array('post' => true, 'confirm' => 'Are you sure?')) ?>
          <?php endif; ?>
          <input type="submit" value="Save" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <tr>
        <th><label for="ville_listville">Listville</label></th>
        <td>
          <?php echo $form['listville']->renderError() ?>
          <?php echo $form['listville'] ?>

        <?php echo $form['id'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</form>
<a href="<?php echo url_for('ville/create/index') ?>">ajouter</a>
<a href="<?php echo url_for('ville/index') ?>">retour liste</a>
