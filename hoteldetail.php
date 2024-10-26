<?php include 'header.php' ?>
  <main id="main">
    <style type="text/css">
      .pics-3 {
      width: 28%;
     float: left;
    border: 1px solid aquamarine;
     margin: 2%;
    position: relative;
      }
      .clearfix {
        clear: both;
       float:none;
      }
      .wrapper {
       width: 80%;
       padding-right: 3.5%;
       margin: 0 auto;
}
    </style>
    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Hotel Details</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Hotel Detail</li>
          </ol>
        </div>
      </div>
    </section><!-- End Breadcrumbs Section -->

    <section class="inner-page">
      <div class="container">
        <?php  
        $eid=($_GET['id']);
$query=mysqli_query($conn,"SELECT * FROM hotel WHERE Email='$eid'");
$count=1;
 while($r=mysqli_fetch_array($query))
 {
  $name=htmlentities($r['Name']);
 $prop=htmlentities($r['Property']);
 $eid=htmlentities($r['Email']);
 $mob=htmlentities($r['Mobile_No']);
 $city=htmlentities($r['City']);
 $address=htmlentities($r['Address']);
 $type=htmlentities($r['Type']);
 $breakfast=htmlentities($r['Breakfast']);
 $lunch=htmlentities($r['Lunch']);
 $dinner=htmlentities($r['Dinner']);
 $airport=htmlentities($r['Airport']);
 $busstand=htmlentities($r['Bus_Stand']);
 $wifi=htmlentities($r['Wifi']);
 $gyser=htmlentities($r['Gyser']);
 $pick=htmlentities($r['Pick_Drop']);
 $balcony=htmlentities($r['Balcony']);
 $lake=htmlentities($r['Lake_View']);
 $ctview=htmlentities($r['City_View']);
 $kitchen=htmlentities($r['Kitchen']);
 $led=htmlentities($r['LED']);
 $ac=htmlentities($r['AC']);
 $mount=htmlentities($r['Mount']);
 $bathroom=htmlentities($r['Bathroom']);
 $tele=htmlentities($r['Telephone']);
  ?>

        <h2><?php echo $name;?></h2>
<div class="pics-3">
  <img src="assets/img/hotels/<?php  echo htmlentities($r['Pic1']); ?>" width="100%">
</div>
<div class="pics-3">
  <img src="assets/img/hotels/<?php  echo htmlentities($r['Pic2']); ?>" width="100%">
</div>
  <div class="pics-3">
  <img src="assets/img/hotels/<?php  echo htmlentities($r['Pic3']); ?>" width="100%">
</div>
</div>
<div class="clearfix"></div>

 <br/>
 <div class="wrapper">
 <table class="table table-hover">
   <tr class="table-primary">
     <th>Facilities:</th>
     <th>Availiability</th>
   </tr>
   <tr>
    <td>Name</td>
    <td><?php echo $name; ?></td>
   </tr>
     <tr>
    <td>Proprietor</td>
    <td><?php echo $prop; ?></td>
   </tr>
     <tr>
    <td>Email</td>
    <td><?php echo $eid; ?></td>
   </tr>
     <tr>
    <td>Mobile Number</td>
    <td><?php echo $mob; ?></td>
   </tr>
     <tr>
    <td>City</td>
    <td><?php echo $city; ?></td>
   </tr>
     <tr>
    <td>Type</td>
    <td><?php echo $type; ?></td>
   </tr>
     <tr>
    <td>Breakfast</td>
    <td><?php echo $breakfast; ?></td>
   </tr>
     <tr>
    <td>Lunch</td>
    <td><?php echo $lunch; ?></td>
   </tr>
     <tr>
    <td>Dinner</td>
    <td><?php echo $dinner; ?></td>
   </tr>
     <tr>
    <td>Wi-Fi</td>
    <td><?php echo $wifi; ?></td>
   </tr>
     <tr>
    <td>Gyser</td>
    <td><?php echo $gyser; ?></td>
   </tr>
     <tr>
    <td>AC.</td>
    <td><?php echo $ac; ?></td>
   </tr>
     <tr>
    <td>Mountain View</td>
    <td><?php echo $mount; ?></td>
   </tr>
     <tr>
    <td>Lake View</td>
    <td><?php echo $lake; ?></td>
   </tr>
     <tr>
    <td>City View</td>
    <td><?php echo $ctview; ?></td>
   </tr>
     <tr>
    <td>LED</td>
    <td><?php echo $led; ?></td>
   </tr>
     <tr>
    <td>Bathroom</td>
    <td><?php echo $bathroom; ?></td>
   </tr>
     <tr>
    <td>Kitchen</td>
    <td><?php echo $kitchen; ?></td>
   </tr>
     <tr>
    <td>Pick & Drop</td>
    <td><?php echo $pick; ?></td>
   </tr>
     <tr>
    <td>Balcony</td>
    <td><?php echo $balcony; ?></td>
   </tr>
     <tr>
    <td>Telephone</td>
    <td><?php echo $tele; ?></td>
   </tr>
 </table>
 <a href="bookhotel.php?id=<?php echo $r['Email'] ?>"><input type="submit" name="book" value="Book" class="btn btn-primary"></a>
</div>
      </div>
         <?php  
 }
 ?>
    </section>

  </main><!-- End #main -->

<?php include 'footer.php' ?>