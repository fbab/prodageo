<?php $nomfjt = $form->getObject() ?>
<h1><?php echo $nomfjt->isNew() ? 'New' : 'Edit' ?> Nomfjt</h1>

<form action="<?php echo url_for('nomfjt/update'.(!$nomfjt->isNew() ? '?id='.$nomfjt->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          &nbsp;<a href="<?php echo url_for('nomfjt/index') ?>">Cancel</a>
          <?php if (!$nomfjt->isNew()): ?>
            &nbsp;<?php echo link_to('Delete', 'nomfjt/delete?id='.$nomfjt->getId(), array('post' => true, 'confirm' => 'Are you sure?')) ?>
          <?php endif; ?>
          <input type="submit" value="Save" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <tr>
        <th><label for="nomfjt_listnomfjt">Listnomfjt</label></th>
        <td>
          <?php echo $form['listnomfjt']->renderError() ?>
          <?php echo $form['listnomfjt'] ?>

        <?php echo $form['id'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</form>
<a href="<?php echo url_for('nomfjt/create/index') ?>">ajouter</a>
<a href="<?php echo url_for('nomfjt/index') ?>">retour liste</a>
