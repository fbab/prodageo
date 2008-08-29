<?php $typecontrat = $form->getObject() ?>
<h1><?php echo $typecontrat->isNew() ? 'New' : 'Edit' ?> Typecontrat</h1>

<form action="<?php echo url_for('typecontrat/update'.(!$typecontrat->isNew() ? '?id='.$typecontrat->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          &nbsp;<a href="<?php echo url_for('typecontrat/index') ?>">Cancel</a>
          <?php if (!$typecontrat->isNew()): ?>
            &nbsp;<?php echo link_to('Delete', 'typecontrat/delete?id='.$typecontrat->getId(), array('post' => true, 'confirm' => 'Are you sure?')) ?>
          <?php endif; ?>
          <input type="submit" value="Save" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <tr>
        <th><label for="typecontrat_listtypecontrat">Listtypecontrat</label></th>
        <td>
          <?php echo $form['listtypecontrat']->renderError() ?>
          <?php echo $form['listtypecontrat'] ?>

        <?php echo $form['id'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</form>
<a href="<?php echo url_for('typecontrat/create/index') ?>">ajouter</a>
<a href="<?php echo url_for('typecontrat/index') ?>">retour liste</a>
