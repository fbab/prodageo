<?php $chapitre = $form->getObject() ?>
<h1><?php echo $chapitre->isNew() ? 'New' : 'Edit' ?> Chapitre</h1>

<form action="<?php echo url_for('chapitre/update'.(!$chapitre->isNew() ? '?id='.$chapitre->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          &nbsp;<a href="<?php echo url_for('chapitre/index') ?>">Cancel</a>
          <?php if (!$chapitre->isNew()): ?>
            &nbsp;<?php echo link_to('Delete', 'chapitre/delete?id='.$chapitre->getId(), array('post' => true, 'confirm' => 'Are you sure?')) ?>
          <?php endif; ?>
          <input type="submit" value="Save" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <tr>
        <th><label for="chapitre_anneecreation">Anneecreation</label></th>
        <td>
          <?php echo $form['anneecreation']->renderError() ?>
          <?php echo $form['anneecreation'] ?>
        </td>
      </tr>
      <tr>
        <th><label for="chapitre_anneesupression">Anneesupression</label></th>
        <td>
          <?php echo $form['anneesupression']->renderError() ?>
          <?php echo $form['anneesupression'] ?>
        </td>
      </tr>
      <tr>
        <th><label for="chapitre_titrechapitre">Titrechapitre</label></th>
        <td>
          <?php echo $form['titrechapitre']->renderError() ?>
          <?php echo $form['titrechapitre'] ?>

        <?php echo $form['id'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</form>
<a href="<?php echo url_for('chapitre/create/index') ?>">ajouter</a>
<a href="<?php echo url_for('chapitre/index') ?>">retour liste</a>
