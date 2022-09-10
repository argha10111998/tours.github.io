


<?php include'header.php'; ?>

<form class="row g-3" action="packagemanagerstore.php" method="POST" enctype="multipart/form-data">
  <div class="col-md-6">
    <label for="packagename" class="form-label">Package Destination</label>
    <input type="text" class="form-control" id="destination" name="destination">
  </div>
  <div class="col-md-3">
    <label for="Days" class="form-label">No of days</label>
    <input type="number" class="form-control" id="Days" name="days">
  </div>
  <div class="col-3">
    <label for="Persons" class="form-label">Persons</label>
    <input type="number" class="form-control" id="persons" name="persons">
  </div>
  <div class="col-8">
    <label for="Caption" class="form-label">Caption</label>
    <input type="text" class="form-control" id="Caption" name="caption" >
  </div>
  <div class="col-md-2">
    <label for="Rating" class="form-label">Rating</label>
    <input type="number" class="form-control" id="Rating" name="rating" >
  </div>
  
  <div class="col-md-2">
    <label for="Price" class="form-label">Price</label>
    <input type="number" class="form-control" id="inputZip"  min="0.00" max="10000.00" step="0.01" name="price">
  </div>
  <div class="mb-3">
  <label for="formFileSm" class="form-label">Small file input example</label>
  <input class="form-control form-control-sm" name="image" id="image" type="file">
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Submit in</button>
  </div>
</form>
<?php include'footer.php'; ?>