<?php
  include('../model/config.php');

  function getModules(){
    include('../model/config.php');
    $get = 'SELECT module_code FROM module';
    return mysqli_query($conn, $get);
  }

?>