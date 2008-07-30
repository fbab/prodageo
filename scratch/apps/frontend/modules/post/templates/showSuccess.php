<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $post->getId() ?></td>
    </tr>
    <tr>
      <th>Title:</th>
      <td><?php echo $post->getTitle() ?></td>
    </tr>
    <tr>
      <th>Excerpt:</th>
      <td><?php echo $post->getExcerpt() ?></td>
    </tr>
    <tr>
      <th>Body:</th>
      <td><?php echo $post->getBody() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $post->getCreatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('post/edit?id='.$post->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('post/index') ?>">List</a>
