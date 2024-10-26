<?php
$name = "";
$prop = "";
$eid = "";
$mob = "";
$city = "";
$address = "";
$lang = "";
$adult_min = "";
$adult_max = "";
$child_min = "";
$child_max = "";
$inf_min = "";
$inf_max = "";
$adult_rate = "";
$child_rate = "";

if (isset($_POST['save'])) {
  $name = $_POST['name'];
  $prop = $_POST['prop'];
  $eid = $_POST['eid'];
  $mob = $_POST['mob'];
  $city = $_POST['city'];
  $address = $_POST['address'];
  $target_file = $target_dir . basename($_FILES["pic1"]["name"]);
  $pic1 = $target_file;
  $target_file2 = $target_dir . basename($_FILES["pic2"]["name"]);
  $pic2 = $target_file2;
  $target_file3 = $target_dir . basename($_FILES["pic3"]["name"]);
  $pic3 = $target_file3;
  $lang = $_POST['lang'];
  $adult_min = $_POST['adult_min'];
  $adult_max = $_POST['adult_max'];
  $child_min = $_POST['child_min'];
  $child_max = $_POST['child_max'];
  $inf_min = $_POST['inf_min'];
  $inf_max = $_POST['inf_max'];
  $adult_rate = $_POST['adult_rate'];
  $child_rate = $_POST['child_rate'];

  $data = "INSERT INTO shik(Name,Property,Email,Mobile_No,City,Address,Pic1,Pic2,Pic3,Language,Adult_Min,Adult_Max,Child_Min,Child_Max,Inf_Min,Inf_Max,Adult_Rate,Child_Rate)  VALUES ('$name','$prop','$eid','$mob','$city','$address','$pic1','$pic2','$pic3','$lang','$adult_min','$adult_max','$child_min','$child_max','$inf_min','$inf_max','$adult_rate','$child_rate')";
  mysqli_query($dbc, $data);
}
if (isset($_POST['search'])) {
  $eid = $_POST['eid'];
  $query = "SELECT * FROM shik WHERE Email='$eid'";
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
    $lang = $r['Language'];
    $adult_min = $r['Adult_Min'];
    $adult_max = $r['Adult_Max'];
    $child_min = $r['Child_Min'];
    $child_max = $r['Child_Max'];
    $inf_min = $r['Inf_Min'];
    $inf_max = $r['Inf_Max'];
    $adult_rate = $r['Adult_Rate'];
    $child_rate = $r['Child_Rate'];
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
  $type = $_POST['type'];
  $lang = $_POST['lang'];
  $adult_min = $_POST['adult_min'];
  $adult_max = $_POST['adult_max'];
  $child_min = $_POST['child_min'];
  $child_max = $_POST['child_max'];
  $inf_min = $_POST['inf_min'];
  $inf_max = $_POST['inf_max'];
  $adult_rate = $_POST['adult_rate'];
  $child_rate = $_POST['child_rate'];
  $query = "UPDATE shik set Name='$name',Property='$prop',Mobile_No='$mob',City='$city',Address='$address',Pic1='$pic',Pic2='$pic2',Pic3='pic3',Language='$lang' WHERE Email='$eid'";
  mysqli_query($dbc, $query);
  $name = "";
  $prop = "";
  $eid = "";
  $mob = "";
  $city = "";
  $address = "";
  $lang = "";
  $adult_min = "";
  $adult_max = "";
  $child_min = "";
  $child_max = "";
  $inf_min = "";
  $inf_max = "";
  $adult_rate = "";
  $child_rate = "";
}
if (isset($_POST['delete'])) {
  $eid = $_POST['eid'];
  $query = "DELETE from shik WHERE Email='$eid'";
  mysqli_query($dbc, $query);
  $name = "";
  $prop = "";
  $mob = "";
  $city = "";
  $address = "";
  $lang = "";
  $adult_min = "";
  $adult_max = "";
  $child_min = "";
  $child_max = "";
  $inf_min = "";
  $inf_max = "";
  $adult_rate = "";
  $child_rate = "";
}
if (isset($_POST['clear'])) {
  $name = "";
  $prop = "";
  $eid = "";
  $mob = "";
  $city = "";
  $address = "";
  $lang = "";
  $adult_min = "";
  $adult_max = "";
  $child_min = "";
  $child_max = "";
  $inf_min = "";
  $inf_max = "";
  $adult_rate = "";
  $child_rate = "";
}
?>