<?php $listerequetes = $form->getObject() ?>
<h1><?php echo $listerequetes->isNew() ? 'New' : 'Edit' ?> Listerequetes</h1>

<form action="<?php echo url_for('listerequetes/update'.(!$listerequetes->isNew() ? '?id='.$listerequetes->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          &nbsp;<a href="<?php echo url_for('listerequetes/index') ?>">Cancel</a>
          <?php if (!$listerequetes->isNew()): ?>
            &nbsp;<?php echo link_to('Delete', 'listerequetes/delete?id='.$listerequetes->getId(), array('post' => true, 'confirm' => 'Are you sure?')) ?>
          <?php endif; ?>
          <input type="submit" value="Save" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <tr>
        <th><label for="listerequetes_listrequetes">Listrequetes</label></th>
        <td>
          <?php echo $form['listrequetes']->renderError() ?>
          <?php echo $form['listrequetes'] ?>
        </td>
      </tr>
       <tr>
        <th><label for="listerequetes_titrerequetes">Titrerequetes</label></th>
        <td>
          <?php echo $form['titrerequetes']->renderError() ?>
          <?php echo $form['titrerequetes'] ?>
        </td>
      </tr>
      <tr>
        <th><label for="listerequetes_chapitre_id">Chapitre id</label></th>
        <td>
          <?php echo $form['chapitre_id']->renderError() ?>
          <?php echo $form['chapitre_id'] ?>

        <?php echo $form['id'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</form>
<a href="<?php echo url_for('listerequetes/create/index') ?>">ajouter</a>
<a href="<?php echo url_for('listerequetes/index') ?>">retour liste</a>
