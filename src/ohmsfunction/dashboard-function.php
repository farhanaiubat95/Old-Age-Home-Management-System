<?php

  require_once("connect.php");
  require_once("dashboard-common.php");

  function get_dash_header(){
    require_once("asset/dash-header.php");
  }
  function get_dash_sidebar(){
    require_once("asset/dash-sidebar.php");
  }
  function get_dash_footer(){
    require_once("asset/dash-footer.php");
  }

?>