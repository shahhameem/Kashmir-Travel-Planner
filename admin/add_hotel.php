<?php
$page_title = "Home";
include 'partials/header.php';
include 'config/loggedin.php';
include 'controllers/hotel.php';
?>
<div class="grid-container">
  <div class="grid-item1">
    <?php include 'partials/nav.php'; ?>
  </div>
  <div class="grid-item2">
  <form action="" method="post" enctype="multipart/form-data" name="myForm" onsubmit="return validateForm()" id="form1" class="p-4">
  <h2 class="text-center mb-4">Houseboat Detail</h2>

  <div class="form-group row">
    <label for="name" class="col-md-3 col-form-label">Name:</label>
    <div class="col-md-9">
      <input type="text" class="form-control" name="name" id="name" value="<?php echo $name; ?>" />
    </div>
  </div>

  <div class="form-group row">
    <label for="prop" class="col-md-3 col-form-label">Proprietor Name:</label>
    <div class="col-md-9">
      <input type="text" class="form-control" name="prop" id="prop" value="<?php echo $prop; ?>" />
    </div>
  </div>

  <div class="form-group row">
    <label for="eid" class="col-md-3 col-form-label">Email:</label>
    <div class="col-md-9">
      <input type="email" class="form-control" name="eid" id="eid" value="<?php echo $eid; ?>" />
    </div>
  </div>

  <div class="form-group row">
    <label for="mob" class="col-md-3 col-form-label">Contact No.:</label>
    <div class="col-md-9">
      <input type="number" class="form-control" name="mob" id="mob" value="<?php echo $mob; ?>" />
    </div>
  </div>

  <div class="form-group row">
    <label for="city" class="col-md-3 col-form-label">City:</label>
    <div class="col-md-9">
      <input type="text" class="form-control" name="city" id="city" value="<?php echo $city; ?>" />
    </div>
  </div>

  <div class="form-group row">
    <label for="address" class="col-md-3 col-form-label">Address:</label>
    <div class="col-md-9">
      <textarea class="form-control" name="address" id="address"><?php echo $address; ?></textarea>
    </div>
  </div>

  <div class="form-group row">
    <label for="type" class="col-md-3 col-form-label">Type:</label>
    <div class="col-md-9">
      <select class="form-control" name="type" id="type">
        <option>1 Star</option>
        <option>2 Star</option>
        <option>3 Star</option>
        <option>4 Star</option>
        <option>5 Star</option>
      </select>
    </div>
  </div>

  <div class="form-group row">
    <label for="amount" class="col-md-3 col-form-label">Amount:</label>
    <div class="col-md-9">
      <input type="number" class="form-control" name="amount" id="amount" value="<?php echo $mob; ?>" />
    </div>
  </div>

  <h3 class="mt-4">Pictures</h3>
  <div class="form-group">
    <input type="file" class="form-control-file mb-2" name="pic1" id="pic1" />
    <input type="file" class="form-control-file mb-2" name="pic2" id="pic2" />
    <input type="file" class="form-control-file" name="pic3" id="pic3" />
  </div>

  <h3 class="mt-4">Meal</h3>
  <div class="form-group">
    <label for="breakfast">Breakfast:</label>
    <select class="form-control" name="breakfast" id="breakfast">
      <option value="">--Select Choice--</option>
      <option value="yes">Yes</option>
      <option value="no">No</option>
    </select>
  </div>

  <div class="form-group">
    <label for="lunch">Lunch:</label>
    <select class="form-control" name="lunch" id="lunch">
      <option value="">--Select Choice--</option>
      <option value="yes">Yes</option>
      <option value="no">No</option>
    </select>
  </div>

  <div class="form-group">
    <label for="dinner">Dinner:</label>
    <select class="form-control" name="dinner" id="dinner">
      <option value="">--Select Choice--</option>
      <option value="yes">Yes</option>
      <option value="no">No</option>
    </select>
  </div>

  <h3 class="mt-4">Distance</h3>
  <div class="form-group row">
    <label for="airport" class="col-md-3 col-form-label">From Airport:</label>
    <div class="col-md-9">
      <input type="number" class="form-control" name="airport" id="airport" value="<?php echo $airport; ?>" />
    </div>
  </div>

  <div class="form-group row">
    <label for="busstand" class="col-md-3 col-form-label">From Bus Stand:</label>
    <div class="col-md-9">
      <input type="number" class="form-control" name="busstand" id="busstand" value="<?php echo $busstand; ?>" />
    </div>
  </div>

  <h3 class="mt-4">Facilities</h3>
  <div class="row">
    <div class="col-md-6">
      <label for="wifi">WiFi:</label>
      <select class="form-control" name="wifi" id="wifi">
        <option value="">--Select Choice--</option>
        <option value="yes">Yes</option>
        <option value="no">No</option>
      </select>
    </div>
    <div class="col-md-6">
      <label for="pick">Pick & Drop:</label>
      <select class="form-control" name="pick" id="pick">
        <option value="">--Select Choice--</option>
        <option value="yes">Yes</option>
        <option value="no">No</option>
      </select>
    </div>
  </div>

  <div class="row mt-2">
    <div class="col-md-6">
      <label for="gyser">Gyser:</label>
      <select class="form-control" name="gyser" id="gyser">
        <option value="">--Select Choice--</option>
        <option value="yes">Yes</option>
        <option value="no">No</option>
      </select>
    </div>
    <div class="col-md-6">
      <label for="balcony">Balcony:</label>
      <select class="form-control" name="balcony" id="balcony">
        <option value="">--Select Choice--</option>
        <option value="yes">Yes</option>
        <option value="no">No</option>
      </select>
    </div>
  </div>

  <div class="row mt-2">
    <div class="col-md-6">
      <label for="ac">AC:</label>
      <select class="form-control" name="ac" id="ac">
        <option value="">--Select Choice--</option>
        <option value="yes">Yes</option>
        <option value="no">No</option>
      </select>
    </div>
    <div class="col-md-6">
      <label for="lake">Lake View:</label>
      <select class="form-control" name="lake" id="lake">
        <option value="">--Select Choice--</option>
        <option value="yes">Yes</option>
        <option value="no">No</option>
      </select>
    </div>
  </div>

  <!-- Add more sections following a similar pattern as required -->

  <div class="d-flex justify-content-evenly mt-4">
    <button type="submit" name="save" id="save" class="btn btn-primary">Save</button>
    <button type="submit" name="search" id="search" class="btn btn-info">Search</button>
    <button type="submit" name="delete" id="delete" class="btn btn-danger">Delete</button>
    <button type="submit" name="update" id="update" class="btn btn-warning">Update</button>
  </div>

  <div class="text-center mt-3">
    <button type="submit" name="clear" id="clear" class="btn btn-secondary">Clear</button>
  </div>
</form>

  </div>
</div>