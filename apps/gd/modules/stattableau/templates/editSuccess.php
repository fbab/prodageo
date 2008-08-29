<?php $stattableau = $form->getObject() ?>
<h1><?php echo $stattableau->isNew() ? 'New' : 'Edit' ?> Stattableau</h1>

<form action="<?php echo url_for('stattableau/update'.(!$stattableau->isNew() ? '?id='.$stattableau->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          &nbsp;<a href="<?php echo url_for('stattableau/index') ?>">Cancel</a>
          <?php if (!$stattableau->isNew()): ?>
            &nbsp;<?php echo link_to('Delete', 'stattableau/delete?id='.$stattableau->getId(), array('post' => true, 'confirm' => 'Are you sure?')) ?>
          <?php endif; ?>
          <input type="submit" value="Save" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <tr>
        <th><label for="stattableau_statistiques_id">Statistiques id</label></th>
        <td>
          <?php echo $form['statistiques_id']->renderError() ?>
          <?php echo $form['statistiques_id'] ?>
        </td>
      </tr>
      <tr>
        <th><label for="stattableau_nomstat">Nomstat</label></th>
        <td>
          <?php echo $form['nomstat']->renderError() ?>
          <?php echo $form['nomstat'] ?>
        </td>
      </tr>
      <tr>
        <th><label for="stattableau_valeaursid">Valeaursid</label></th>
        <td>
          <?php echo $form['valeaursid']->renderError() ?>
          <?php echo $form['valeaursid'] ?>
        </td>
      </tr>
      <tr>
        <th><label for="stattableau_valeurs">Valeurs</label></th>
        <td>
          <?php echo $form['valeurs']->renderError() ?>
          <?php echo $form['valeurs'] ?>

        <?php echo $form['id'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</form>
