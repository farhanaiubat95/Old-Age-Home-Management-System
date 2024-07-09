<?php
  require ('connect.php');
  $u_id=$_GET['u_id'];
  $query="DELETE FROM `tb_userlog` WHERE u_id='$u_id'";
  $data=mysqli_query($con,$query);

  if($data)
  {
    echo"Record Deleted";
    ?>
      <meta http-equiv="refresh" content="0;url=http://localhost/Old age home/all-user.php" />
    <?php
  }else{
    echo"Record Not Deleted";
  }

?>