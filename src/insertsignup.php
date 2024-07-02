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
$gender=$_POST['gender'];
$dob=$_POST['date'];
$citizen=$_POST['citizenship'];
$nid=$_POST['nid'];
$marital=$_POST['marital'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$child=$_POST['childNum'];
$pass=$_POST['pass'];
$address=$_POST['address'];
$ugname=$_POST['ug_name'];
$ugrelation=$_POST['relation'];
$ugphone=$_POST['ug_num'];
$ugemail=$_POST['ug_email'];
$ugaddress=$_POST['ug_address'];
$ugcomment=$_POST['ug_comments'];

$sql="INSERT INTO `tb_userlog`(`u_id`, `u_username`, `u_fullname`, `u_gender`, `u_dob`, `u_citizen`, `u_national`, `u_maritalStatus`, `u_phonenum`, `u_email`, `u_child`, `u_image`, `u_password`, `u_address`, `ug_name`, `ug_relationship`, `ug_phone`, `ug_email`, `ug_address`, `ug_comments`, `u_registrationdate`) 
VALUES ('null','$username','$fullname','$gender','$dob','$citizen','$nid','$marital','$phone','$email','$child','$folder','$pass','$address','$ugname','$ugrelation','$ugphone','$ugemail','$ugaddress','$ugcomment',current_timestamp)";


if(mysqli_query($con,$sql))
{
  session_start();
  echo"
  <script>
  alert('Registered successfully');
  window.location.href='login.php';
  </script>
  ";
}
else{
  echo"
  <script>
  alert('Not Inserted. Check again');
  window.location.href='signup.php';
  </script>
  ";
}


mysqli_close($con);
?>