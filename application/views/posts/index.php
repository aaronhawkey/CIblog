<h1><?= $title ?></h2>

  <br>

<?php foreach($posts as $post) : ?>
  <h3><?php echo $post['title']; ?></h3>
  <small class="post-date"> Posted on: <<?php echo $post['created_at'] ?></small>
  <p><?php echo $post['body'] ?></p>
  <a href="/posts/<?php echo $post['slug']; ?>"><button class="btn btn-outline-primary">Read More</button></a>
  <br>
  <br>
<?php endforeach; ?>
