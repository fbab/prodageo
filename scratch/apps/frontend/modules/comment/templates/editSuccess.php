<?php $comment = $form->getObject() ?>
<h1><?php echo $comment->isNew() ? 'New' : 'Edit' ?> Comment</h1>

<form action="<?php echo url_for('comment/update'.(!$comment->isNew() ? '?id='.$comment->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          &nbsp;<a href="<?php echo url_for('comment/index') ?>">Cancel</a>
          <?php if (!$comment->isNew()): ?>
            &nbsp;<?php echo link_to('Delete', 'comment/delete?id='.$comment->getId(), array('post' => true, 'confirm' => 'Are you sure?')) ?>
          <?php endif; ?>
          <input type="submit" value="Save" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <tr>
        <th><label for="comment_post_id">Post id</label></th>
        <td>
          <?php echo $form['post_id']->renderError() ?>
          <?php echo $form['post_id'] ?>
        </td>
      </tr>
      <tr>
        <th><label for="comment_author">Author</label></th>
        <td>
          <?php echo $form['author']->renderError() ?>
          <?php echo $form['author'] ?>
        </td>
      </tr>
      <tr>
        <th><label for="comment_email">Email</label></th>
        <td>
          <?php echo $form['email']->renderError() ?>
          <?php echo $form['email'] ?>
        </td>
      </tr>
      <tr>
        <th><label for="comment_body">Body</label></th>
        <td>
          <?php echo $form['body']->renderError() ?>
          <?php echo $form['body'] ?>
        </td>
      </tr>
      <tr>
        <th><label for="comment_created_at">Created at</label></th>
        <td>
          <?php echo $form['created_at']->renderError() ?>
          <?php echo $form['created_at'] ?>

        <?php echo $form['id'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</form>
