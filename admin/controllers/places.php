<?php
$name="";
 $type="";
 $district="";
 $distance="";
 $pop1=""; $pop2=""; $pop3="";
 $pop1=""; $pop2=""; $pop3="";
 $detail="";
if(isset($_POST['save'])) 
{
 $name=$_POST['name'];
 $district=$_POST['district'];
 $type=$_POST['type'];
 $pop1=$_POST['pop1'];
 $pop2=$_POST['pop2'];
 $pop3=$_POST['pop3'];
 $distance=$_POST['distance'];
 $detail=$_POST['detail'];
 $target_file = $target_dir . basename($_FILES["pic1"]["name"]);
 $pic1=$target_file;
 $target_file2 = $target_dir . basename($_FILES["pic2"]["name"]);
 $pic2=$target_file2;
 $target_file3 = $target_dir . basename($_FILES["pic3"]["name"]);
 $pic3=$target_file3;
 $data="INSERT INTO places(name,type,district,pop1,pop2,pop3,distance,detail,pic1,pic2,pic3)  VALUES ('$name','$type','$district','$pop1','$pop2','$pop3','$distance','$detail','$pic1','$pic2','$pic3')";
 mysqli_query($dbc,$data);
}
if(isset($_POST['search']))
{
 $name=$_POST['name'];
 $query="SELECT * FROM places WHERE name='$name'";
 $val=mysqli_query($dbc,$query);
 while($r=mysqli_fetch_array($val))
 {
   $name=$r['name'];
   $type=$r['type'];
   $district=$r['district'];
   $pop1=$r['pop1'];
   $pop2=$r['pop2'];
   $pop3=$r['pop3'];
   $distance=$r['distance'];
   $detail=$r['detail'];
   $pic1=$r['pic1'];
   $pic2=$r['pic2'];
   $pic3=$r['pic3'];
 }
}
if(isset($_POST['update']))
{
  $name=$_POST['name'];
 $district=$_POST['district'];
 $type=$_POST['type'];
 $pop1=$_POST['pop1'];
 $pop2=$_POST['pop2'];
 $pop3=$_POST['pop3'];
 $distance=$_POST['distance'];
  $detail=$_POST['detail'];
 $pic1=$_POST['pic1'];
 $pic2=$_POST['pic2'];
 $pic3=$_POST['pic3'];	
 $query="UPDATE foods set detail='$detail',district='$district',type='$type',pop1='$pop1',pop2='$pop2',pop3='$pop3',distance='$distance',pic1='$pic',pic2='$pic2',pic3='pic3' WHERE name='$name'";
 mysqli_query($dbc,$query);
 $name="";
 $prop="";
 $eid="";
 $mob="";
 $city="";
 $address="";
 }
  if(isset($_POST['delete']))
 {
  $name=$_POST['name'];
  $query="DELETE from places WHERE name='$name'";
  mysqli_query($dbc,$query);
  $name="";
  $type="";
 $district="";
 $distance="";
 $pop1=""; $pop2=""; $pop3="";
 $pic1=""; $pic2=""; $pic3="";
 $detail="";
 }
 if(isset($_POST['clear']))
 {
 $name="";
  $type="";
 $district="";
 $distance="";
 $pop1=""; $pop2=""; $pop3="";
 $pic1=""; $pic2=""; $pic3="";
 $detail="";
 }
?>