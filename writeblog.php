


<?php include'header.php'; ?>

<form class="row g-3" action="storeblog.php" method="POST" enctype="multipart/form-data">
  <div class="col-md-6">
    <label for="postname" class="form-label">Postname</label>
    <input type="text" class="form-control" id="destination" name="postname">
  </div>
  <div class="col-md-3">
    <label for="Author" class="form-label">Author</label>
    <input type="text" class="form-control" id="Days" name="author">
  </div>
  <div class="col-3">
    <label for="date" class="form-label">Date</label>
    <input type="date" class="form-control" id="date" name="date">
  </div>
 
  <div class="mb-3">
  <label for="formFileSm" class="form-label">Featured Image</label>
  <input class="form-control form-control-sm" name="featuredimage" id="featuredimage"type="file">
  </div>
  <div class="mb-3">
  <label for="formFileSm" class="form-label">Postimage</label>
  <input class="form-control form-control-sm" name="postimage" id="postimage" type="file">
  </div>
  <div class="col-10">
  <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
  <textarea class="form-control" name="content" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Submit in</button>
  </div>
</form>
<?php include'footer.php'; ?>