<?php $typeproprietairehlm = $form->getObject() ?>
<h1><?php echo $typeproprietairehlm->isNew() ? 'New' : 'Edit' ?> Typeproprietairehlm</h1>

<form action="<?php echo url_for('typeproprietairehlm/update'.(!$typeproprietairehlm->isNew() ? '?id='.$typeproprietairehlm->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          &nbsp;<a href="<?php echo url_for('typeproprietairehlm/index') ?>">Cancel</a>
          <?php if (!$typeproprietairehlm->isNew()): ?>
            &nbsp;<?php echo link_to('Delete', 'typeproprietairehlm/delete?id='.$typeproprietairehlm->getId(), array('post' => true, 'confirm' => 'Are you sure?')) ?>
          <?php endif; ?>
          <input type="submit" value="Save" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <tr>
        <th><label for="typeproprietairehlm_listtypeproprietairehlm">Listtypeproprietairehlm</label></th>
        <td>
          <?php echo $form['listtypeproprietairehlm']->renderError() ?>
          <?php echo $form['listtypeproprietairehlm'] ?>

        <?php echo $form['id'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</form>
<a href="<?php echo url_for('typeproprietairehlm/create/index') ?>">ajouter</a>
<a href="<?php echo url_for('typeproprietairehlm/index') ?>">retour liste</a>
