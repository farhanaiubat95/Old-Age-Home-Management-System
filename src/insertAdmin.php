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
$folder="./images/" .$filename;
//echo $folder;
move_uploaded_file($tempname,$folder);

$username=$_POST['user']; 
$fullname=$_POST['fullname']; 
$nid=$_POST['nid'];
$phone=$_POST['phone'];
$email=$_POST['email'];              
$dob=$_POST['date'];
$address=$_POST['address'];
$pass=$_POST['pass'];


$sql="INSERT INTO `tb_admin`(`id`, `a_user`, `admin_name`, `admin_NID`, `admin_phone`, `admin_email`, `dob`, `admin_address`, `admin_image`, `admin_pass`, `admin_regt_date`) VALUES ('null','$username','$fullname','$nid','$phone','$email','$dob','$address','$folder','$pass',current_timestamp)";


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