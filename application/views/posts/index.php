<h1><?= $title ?></h2>

  <br>

<?php foreach($posts as $post) : ?>
  <h3><?php echo $post['title']; ?></h3>
  <small class="post-date"> Posted on: <<?php echo $post['created_at'] ?> in <strong><?php echo $post['name']; ?></strong></small>
  <p><?php echo word_limiter($post['body'], 60); ?></p>
  <a href="/posts/<?php echo $post['slug']; ?>"><button class="btn btn-outline-primary">Read More</button></a>
  <br>
  <br>
<?php endforeach; ?>
