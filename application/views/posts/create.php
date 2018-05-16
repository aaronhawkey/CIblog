<h1><?= $title; ?> </h1>

<?php echo validation_errors(); ?>

<form action="create" method="post" accept-charset="utf-8">
  <div class="form-group">
    <label >Title</label>
    <input type="text" class="form-control" name="title" placeholder="Add Title">
  </div>
  <div class="form-group">
    <label >Body</label>
    <textarea id="editor1" rows="20" class="form-control" name="body" placeholder="Add Post Body"></textarea>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
