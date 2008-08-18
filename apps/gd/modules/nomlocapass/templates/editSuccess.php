<?php $nomlocapass = $form->getObject() ?>
<h1><?php echo $nomlocapass->isNew() ? 'New' : 'Edit' ?> Nomlocapass</h1>

<form action="<?php echo url_for('nomlocapass/update'.(!$nomlocapass->isNew() ? '?id='.$nomlocapass->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          &nbsp;<a href="<?php echo url_for('nomlocapass/index') ?>">Cancel</a>
          <?php if (!$nomlocapass->isNew()): ?>
            &nbsp;<?php echo link_to('Delete', 'nomlocapass/delete?id='.$nomlocapass->getId(), array('post' => true, 'confirm' => 'Are you sure?')) ?>
          <?php endif; ?>
          <input type="submit" value="Save" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <tr>
        <th><label for="nomlocapass_listnomlocapass">Listnomlocapass</label></th>
        <td>
          <?php echo $form['listnomlocapass']->renderError() ?>
          <?php echo $form['listnomlocapass'] ?>

        <?php echo $form['id'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</form>
<a href="<?php echo url_for('nomlocapass/create/index') ?>">ajouter</a>
<a href="<?php echo url_for('nomlocapass/index') ?>">retour liste</a>
