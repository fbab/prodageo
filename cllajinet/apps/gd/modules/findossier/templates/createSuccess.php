<?php $findossier = $form->getObject()?>
<h1><?php echo $findossier->isNew() ? 'New' : 'Edit' ?> Findossier</h1>

<form action="<?php echo url_for('findossier/update'.(!$findossier->isNew() ? '?id='.$findossier->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          &nbsp;<a href="<?php echo url_for('findossier/index') ?>">Annuler</a>
          <?php if (!$findossier->isNew()): ?>
            &nbsp;<?php echo link_to('Supprimer', 'findossier/delete?id='.$findossier->getId(), array('post' => true, 'confirm' => 'Are you sure?')) ?>
          <?php endif; ?>
          <input type="submit" value="Poursuivre fin du dossier" name="poursuivreFinDossier" />
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
        <th><label for="findossier_categorie_classement">Categorie classement</label></th>
        <td>
          <?php echo $form['categorie_classement']->renderError() ?>
          <?php echo $form['categorie_classement'] ?>
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
