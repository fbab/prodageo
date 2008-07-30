<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $comment->getId() ?></td>
    </tr>
    <tr>
      <th>Post:</th>
      <td><?php echo $comment->getPostId() ?></td>
    </tr>
    <tr>
      <th>Author:</th>
      <td><?php echo $comment->getAuthor() ?></td>
    </tr>
    <tr>
      <th>Email:</th>
      <td><?php echo $comment->getEmail() ?></td>
    </tr>
    <tr>
      <th>Body:</th>
      <td><?php echo $comment->getBody() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $comment->getCreatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('comment/edit?id='.$comment->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('comment/index') ?>">List</a>
