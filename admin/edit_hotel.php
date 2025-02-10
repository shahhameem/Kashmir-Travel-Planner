<?php
include 'partials/header.php';
include 'config/loggedin.php';

$upload_dir = "../assets/img/hotels/";

if (isset($_GET['id'])) {
    $id = mysqli_real_escape_string($dbc, $_GET['id']);
    
    // Fetch the existing hotel data
    $query = "SELECT * FROM hotels WHERE id = '$id'";
    $result = mysqli_query($dbc, $query);
    
    if (mysqli_num_rows($result) > 0) {
        $hotel = mysqli_fetch_assoc($result);
    } else {
        die("Hotel not found!");
    }
}

// Handle form submission
if (isset($_POST['update'])) {
    $name = mysqli_real_escape_string($dbc, $_POST['name']);
    $owner = mysqli_real_escape_string($dbc, $_POST['owner']);
    $email = mysqli_real_escape_string($dbc, $_POST['email']);
    $contact = mysqli_real_escape_string($dbc, $_POST['contact']);
    $address = mysqli_real_escape_string($dbc, $_POST['address']);
    $city = mysqli_real_escape_string($dbc, $_POST['city']);
    $rating = mysqli_real_escape_string($dbc, $_POST['rating']);

    // Handle image uploads
    function uploadImage($file, $upload_dir, $existing_image) {
        if ($file['error'] == UPLOAD_ERR_OK) {
            $filename = basename($file['name']);
            $target_path = $upload_dir . $filename;
            
            if (move_uploaded_file($file['tmp_name'], $target_path)) {
                return $filename; // Return new image name
            }
        }
        return $existing_image; // Keep the old image if no new image is uploaded
    }

    $pic1 = uploadImage($_FILES['pic1'], $upload_dir, $hotel['pic1']);
    $pic2 = uploadImage($_FILES['pic2'], $upload_dir, $hotel['pic2']);
    $pic3 = uploadImage($_FILES['pic3'], $upload_dir, $hotel['pic3']);

    // Update database
    $query = "UPDATE hotels SET Name='$name', Owner='$owner', Email='$email', Contact='$contact', 
              Address='$address', City='$city', Rating='$rating', Pic1='$pic1', Pic2='$pic2', Pic3='$pic3'
              WHERE id='$id'";

    if (mysqli_query($dbc, $query)) {
        echo "<script>alert('Hotel updated successfully!'); window.location.href='manage_hotel.php';</script>";
    } else {
        echo "Error: " . mysqli_error($dbc);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Hotel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="card shadow-lg p-4">
            <h2 class="text-center mb-4">Edit Hotel</h2>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Hotel Name</label>
                        <input type="text" class="form-control" name="name" value="<?= $hotel['Name'] ?>" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Owner Name</label>
                        <input type="text" class="form-control" name="owner" value="<?= $hotel['Owner'] ?>" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" value="<?= $hotel['Email'] ?>" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Contact No.</label>
                        <input type="tel" class="form-control" name="contact" value="<?= $hotel['Contact'] ?>" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Address</label>
                    <textarea class="form-control" name="address" rows="2" required><?= $hotel['Address'] ?></textarea>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">City</label>
                        <input type="text" class="form-control" name="city" value="<?= $hotel['City'] ?>" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Star Rating</label>
                        <select class="form-select" name="rating" required>
                            <option value="1" <?= $hotel['Rating'] == 1 ? 'selected' : '' ?>>1 Star</option>
                            <option value="2" <?= $hotel['Rating'] == 2 ? 'selected' : '' ?>>2 Star</option>
                            <option value="3" <?= $hotel['Rating'] == 3 ? 'selected' : '' ?>>3 Star</option>
                            <option value="4" <?= $hotel['Rating'] == 4 ? 'selected' : '' ?>>4 Star</option>
                            <option value="5" <?= $hotel['Rating'] == 5 ? 'selected' : '' ?>>5 Star</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Upload New Images (Leave empty to keep current images)</label>
                    <input type="file" class="form-control" name="pic1">
                    <img src="<?= $upload_dir . $hotel['pic1'] ?>" width="100" class="mt-2">
                    <input type="file" class="form-control mt-2" name="pic2">
                    <img src="<?= $upload_dir . $hotel['pic2'] ?>" width="100" class="mt-2">
                    <input type="file" class="form-control mt-2" name="pic3">
                    <img src="<?= $upload_dir . $hotel['pic3'] ?>" width="100" class="mt-2">
                </div>
                <div class="text-center mt-4">
                    <button type="submit" name="update" class="btn btn-primary">Update</button>
                    <a href="manage_hotel.php" class="btn btn-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
