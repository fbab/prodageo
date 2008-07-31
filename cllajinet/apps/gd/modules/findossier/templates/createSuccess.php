<?php $findossier = $form->getObject()?>
<h1><?php echo $findossier->isNew() ? 'New' : 'Edit' ?> Findossier</h1>

<form action="<?php echo url_for('findossier/update'.(!$findossier->isNew() ? '?id='.$findossier->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          &nbsp;<a href="<?php echo url_for('findossier/index') ?>">Cancel</a>
          <?php if (!$findossier->isNew()): ?>
            &nbsp;<?php echo link_to('Delete', 'findossier/delete?id='.$findossier->getId(), array('post' => true, 'confirm' => 'Are you sure?')) ?>
          <?php endif; ?>
          <input type="submit" value="Save" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>

      <tr>
        <th><label for="findossier_dossier_id">Dossier id</label></th>
        <td>
          <?php echo $form['dossier_id']->renderError();
                echo $form['dossier_id'];
                echo $sf_params->get('dossier_id');
          ?>
        </td>
      </tr>

      <tr>
        <th><label for="findossier_type_parc">Type parc</label></th>
        <td>
          <?php echo $form['type_parc']->renderError() ?>
          <?php echo $form['type_parc'] ?>
          <?php echo $findossier->getTypeParc() ?>
        </td>
      </tr>

      
    </tbody>
  </table>
</form>
