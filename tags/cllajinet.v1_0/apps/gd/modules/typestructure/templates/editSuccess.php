<?php $typestructure = $form->getObject() ?>
<h1><?php echo $typestructure->isNew() ? 'New' : 'Edit' ?> Typestructure</h1>

<form action="<?php echo url_for('typestructure/update'.(!$typestructure->isNew() ? '?id='.$typestructure->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          &nbsp;<a href="<?php echo url_for('typestructure/index') ?>">Cancel</a>
          <?php if (!$typestructure->isNew()): ?>
            &nbsp;<?php echo link_to('Delete', 'typestructure/delete?id='.$typestructure->getId(), array('post' => true, 'confirm' => 'Are you sure?')) ?>
          <?php endif; ?>
          <input type="submit" value="Save" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <tr>
        <th><label for="typestructure_listtypestructure">Listtypestructure</label></th>
        <td>
          <?php echo $form['listtypestructure']->renderError() ?>
          <?php echo $form['listtypestructure'] ?>

        <?php echo $form['id'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</form>
<a href="<?php echo url_for('typestructure/create/index') ?>">ajouter</a>
<a href="<?php echo url_for('typestructure/index') ?>">retour liste</a>
