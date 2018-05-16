<h2><?php echo $post['title']; ?> </h2>
<div class="post-body">
  <small class="post-date"> Posted on: <<?php echo $post['created_at'] ?></small>
  <?php echo $post['body']; ?>
</div>

<hr>


<a href="/posts/edit/<?php echo $post['slug']; ?>" class="btn btn-default pull-left">Edit</a>

<?php echo form_open('/posts/delete/'.$post['id']); ?>
  <input type="submit" value="Delete" class="btn btn-danger">
</form>
