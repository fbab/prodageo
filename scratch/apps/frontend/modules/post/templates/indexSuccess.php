<h1>Post List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Title</th>
      <th>Excerpt</th>
      <th>Body</th>
      <th>Created at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($postList as $post): ?>
    <tr>
      <td><a href="<?php echo url_for('post/show?id='.$post->getId()) ?>"><?php echo $post->getId() ?></a></td>
      <td><?php echo $post->getTitle() ?></td>
      <td><?php echo $post->getExcerpt() ?></td>
      <td><?php echo $post->getBody() ?></td>
      <td><?php echo $post->getCreatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<a href="<?php echo url_for('post/create') ?>">Create</a>
