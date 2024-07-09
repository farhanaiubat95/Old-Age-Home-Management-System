<?php
  require ('connect.php');
  $id=$_GET['id'];
  $query="DELETE FROM `tb_admin` WHERE id='$id'";
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