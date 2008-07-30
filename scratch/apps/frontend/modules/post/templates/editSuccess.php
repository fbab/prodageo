<?php $post = $form->getObject() ?>
<h1><?php echo $post->isNew() ? 'New' : 'Edit' ?> Post</h1>

<form action="<?php echo url_for('post/update'.(!$post->isNew() ? '?id='.$post->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          &nbsp;<a href="<?php echo url_for('post/index') ?>">Cancel</a>
          <?php if (!$post->isNew()): ?>
            &nbsp;<?php echo link_to('Delete', 'post/delete?id='.$post->getId(), array('post' => true, 'confirm' => 'Are you sure?')) ?>
          <?php endif; ?>
          <input type="submit" value="Save" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <tr>
        <th><label for="post_title">Title</label></th>
        <td>
          <?php echo $form['title']->renderError() ?>
          <?php echo $form['title'] ?>
        </td>
      </tr>
      <tr>
        <th><label for="post_excerpt">Excerpt</label></th>
        <td>
          <?php echo $form['excerpt']->renderError() ?>
          <?php echo $form['excerpt'] ?>
        </td>
      </tr>
      <tr>
        <th><label for="post_body">Body</label></th>
        <td>
          <?php echo $form['body']->renderError() ?>
          <?php echo $form['body'] ?>
        </td>
      </tr>
      <tr>
        <th><label for="post_created_at">Created at</label></th>
        <td>
          <?php echo $form['created_at']->renderError() ?>
          <?php echo $form['created_at'] ?>

        <?php echo $form['id'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</form>
