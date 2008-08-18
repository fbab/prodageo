<?php $typeproprietaireprive = $form->getObject() ?>
<h1><?php echo $typeproprietaireprive->isNew() ? 'New' : 'Edit' ?> Typeproprietaireprive</h1>

<form action="<?php echo url_for('typeproprietaireprive/update'.(!$typeproprietaireprive->isNew() ? '?id='.$typeproprietaireprive->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          &nbsp;<a href="<?php echo url_for('typeproprietaireprive/index') ?>">Cancel</a>
          <?php if (!$typeproprietaireprive->isNew()): ?>
            &nbsp;<?php echo link_to('Delete', 'typeproprietaireprive/delete?id='.$typeproprietaireprive->getId(), array('post' => true, 'confirm' => 'Are you sure?')) ?>
          <?php endif; ?>
          <input type="submit" value="Save" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <tr>
        <th><label for="typeproprietaireprive_listtypeproprietaireprive">Listtypeproprietaireprive</label></th>
        <td>
          <?php echo $form['listtypeproprietaireprive']->renderError() ?>
          <?php echo $form['listtypeproprietaireprive'] ?>

        <?php echo $form['id'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</form>
<a href="<?php echo url_for('typeproprietaireprive/create/index') ?>">ajouter</a>
<a href="<?php echo url_for('typeproprietaireprive/index') ?>">retour liste</a>
