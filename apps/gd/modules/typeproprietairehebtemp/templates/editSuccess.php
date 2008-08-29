<?php $typeproprietairehebtemp = $form->getObject() ?>
<h1><?php echo $typeproprietairehebtemp->isNew() ? 'New' : 'Edit' ?> Typeproprietairehebtemp</h1>

<form action="<?php echo url_for('typeproprietairehebtemp/update'.(!$typeproprietairehebtemp->isNew() ? '?id='.$typeproprietairehebtemp->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          &nbsp;<a href="<?php echo url_for('typeproprietairehebtemp/index') ?>">Cancel</a>
          <?php if (!$typeproprietairehebtemp->isNew()): ?>
            &nbsp;<?php echo link_to('Delete', 'typeproprietairehebtemp/delete?id='.$typeproprietairehebtemp->getId(), array('post' => true, 'confirm' => 'Are you sure?')) ?>
          <?php endif; ?>
          <input type="submit" value="Save" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <tr>
        <th><label for="typeproprietairehebtemp_listtypeproprietairehebtemp">Listtypeproprietairehebtemp</label></th>
        <td>
          <?php echo $form['listtypeproprietairehebtemp']->renderError() ?>
          <?php echo $form['listtypeproprietairehebtemp'] ?>

        <?php echo $form['id'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</form>
<a href="<?php echo url_for('typeproprietairehebtemp/create/index') ?>">ajouter</a>
<a href="<?php echo url_for('typeproprietairehebtemp/index') ?>">retour liste</a>
