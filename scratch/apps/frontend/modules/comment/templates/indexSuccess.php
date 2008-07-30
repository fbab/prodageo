<h1>Comment List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Post</th>
      <th>Author</th>
      <th>Email</th>
      <th>Body</th>
      <th>Created at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($commentList as $comment): ?>
    <tr>
      <td><a href="<?php echo url_for('comment/show?id='.$comment->getId()) ?>"><?php echo $comment->getId() ?></a></td>
      <td><?php echo $comment->getPostId() ?></td>
      <td><?php echo $comment->getAuthor() ?></td>
      <td><?php echo $comment->getEmail() ?></td>
      <td><?php echo $comment->getBody() ?></td>
      <td><?php echo $comment->getCreatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<a href="<?php echo url_for('comment/create') ?>">Create</a>
