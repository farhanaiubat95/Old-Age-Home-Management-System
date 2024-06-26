<?php
session_start();

if(!isset($_SESSION[`Adminidname`]))
{
  header("location:adminlog.php");
}

if(isset($_POST['logout']))
{
    session_destroy();
    echo"
    <script>
    alert('Log out successfully'); 
    window.location.href='adminlogin.php';
    </script>
    ";      
}

?>