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
        <div class="card shadow-lg p-4">     
            <form action="" method="post" enctype="multipart/form-data" id="hotelForm">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="name" class="form-label">Hotel Name</label>
                        <input type="text" class="form-control" name="name" id="name" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="owner" class="form-label">Owner Name</label>
                        <input type="text" class="form-control" name="owner" id="owner" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" id="email" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="contact" class="form-label">Contact No.</label>
                        <input type="tel" class="form-control" name="contact" id="contact" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <textarea class="form-control" name="address" id="address" rows="2" required></textarea>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="city" class="form-label">City</label>
                        <input type="text" class="form-control" name="city" id="city" required>
                    </div>

                </div>
                <div class="mt-3 mb-3">
                    <label for="images" class="form-label">Upload Images</label>
                    <input type="file" name="pic1" id="pic1" class="form-control-file mb-2" required />
                    <input type="file" name="pic2" id="pic2" class="form-control-file mb-2" />
                    <input type="file" name="pic3" id="pic3" class="form-control-file mb-2" />
                </div>
                <div class="text-center mt-4">
                    <button type="submit" name="save" class="btn btn-primary me-2">Save</button>
                    <button type="reset" class="btn btn-secondary">Clear</button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
