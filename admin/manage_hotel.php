<?php

include 'partials/header.php';
include 'config/loggedin.php';

// Fetch all hotels from the database
$query = "SELECT * FROM hotels";
$result = mysqli_query($dbc, $query);
?>

    <div class="container mt-5">
        <h2 class="text-center mb-4">Manage Hotels</h2>
        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Owner</th>
                    <th>Email</th>
                    <th>Contact</th>
                    <th>City</th>
                    <th>Rating</th>
                    <th>Image</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['owner']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['contact']; ?></td>
                    <td><?php echo $row['city']; ?></td>
                    <td><?php echo $row['rating']; ?> Star</td>
                    <td><img src="../assets/img/hotels/<?php echo $row['image']; ?>" width="80" height="60" alt="Hotel Image"></td>
                    <td><a href="edit_hotel.php?id=<?php echo $row['id']; ?>" class="btn btn-warning btn-sm">Edit</a></td>
                    <td><a href="delete_hotel.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this hotel?');">Delete</a></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>
