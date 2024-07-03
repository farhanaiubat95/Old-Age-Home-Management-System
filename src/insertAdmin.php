<?php

$con=mysqli_connect("localhost","root","","db_ohms");

if(!$con)
{
  echo"Not connected";

}

/*For Upload image*/ 
//print_r($_FILES["image"]);
$filename=$_FILES["image"]["name"];
$tempname=$_FILES["image"]["tmp_name"];
$folder="images/" .$filename;
//echo $folder;
move_uploaded_file($tempname,$folder);


$fullname=$_POST['a_fullname']; 
$email=$_POST['a_email'];              
$phone=$_POST['a_phone'];
$national=$_POST['a_nid'];
$address=$_POST['a_address'];
$pass=$_POST['a_pass'];


$sql="INSERT INTO `tb_admin`(`id`,`admin_name`,`admin_NID`,`admin_phone`,`admin_email`,`admin_address`, `admin_image`, `admin_pass`, `admin_regt_date`) VALUES ('null','$fullname','$national','$phone','$email','$address','$folder','$pass',current_timestamp)";


if(mysqli_query($con,$sql))
{
  session_start();
  echo"
  <script>
  alert('Registered successfully');
  window.location.href='all-admin.php';
  </script>
  ";
}
else{
  echo"
  <script>
  alert('Not Inserted. Check again');
  window.location.href='add-admin.php';
  </script>
  ";
}


mysqli_close($con);
?>