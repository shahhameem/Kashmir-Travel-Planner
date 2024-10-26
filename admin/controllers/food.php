<?php
$name = "";
$prop = "";
$eid = "";
$mob = "";
$city = "";
$address = "";
if (isset($_POST['save'])) {
  $name = $_POST['name'];
  $prop = $_POST['prop'];
  $eid = $_POST['eid'];
  $mob = $_POST['mob'];
  $city = $_POST['city'];
  $address = $_POST['address'];
  $type = $_POST['type'];
  $target_file = $target_dir . basename($_FILES["pic1"]["name"]);
  $pic1 = $target_file;
  $target_file2 = $target_dir . basename($_FILES["pic2"]["name"]);
  $pic2 = $target_file2;
  $target_file3 = $target_dir . basename($_FILES["pic3"]["name"]);
  $pic3 = $target_file3;
  $data = "INSERT INTO foods(Name,Property,Email,Mobile_No,City,Address,Type,Pic1,Pic2,Pic3)  VALUES ('$name','$prop','$eid','$mob','$city','$address','$type','$pic1','$pic2','$pic3')";
  mysqli_query($dbc, $data);
}
if (isset($_POST['search'])) {
  $eid = $_POST['eid'];
  $query = "SELECT * FROM foods WHERE Email='$eid'";
  $val = mysqli_query($dbc, $query);
  while ($r = mysqli_fetch_array($val)) {
    $name = $r['Name'];
    $prop = $r['Property'];
    $mob = $r['Mobile_No'];
    $address = $r['Address'];
    $city = $r['City'];
    $pic1 = $r['Pic1'];
    $pic2 = $r['Pic2'];
    $pic3 = $r['Pic3'];
  }
}
if (isset($_POST['update'])) {
  $name = $_POST['name'];
  $prop = $_POST['prop'];
  $eid = $_POST['eid'];
  $mob = $_POST['mob'];
  $city = $_POST['city'];
  $address = $_POST['address'];
  $pic1 = $_POST['pic1'];
  $pic2 = $_POST['pic2'];
  $pic3 = $_POST['pic3'];
  $query = "UPDATE foods set Name='$name',Property='$prop',Mobile_No='$mob',City='$city',Address='$address',Pic1='$pic',Pic2='$pic2',Pic3='pic3' WHERE Email='$eid'";
  mysqli_query($dbc, $query);
  $name = "";
  $prop = "";
  $eid = "";
  $mob = "";
  $city = "";
  $address = "";
}
if (isset($_POST['delete'])) {
  $eid = $_POST['eid'];
  $query = "DELETE from foods WHERE Email='$eid'";
  mysqli_query($dbc, $query);
  $name = "";
  $prop = "";
  $mob = "";
  $city = "";
  $address = "";
}
if (isset($_POST['clear'])) {
  $name = "";
  $prop = "";
  $eid = "";
  $mob = "";
  $city = "";
  $address = "";
}
?>