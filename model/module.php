<?php
     require_once('../model/config.php');

     if(isset($_POST['submit'])){
      $start = $_POST['start'];
      $end = $_POST['end'];
      $day = $_POST['day'];
      $room = $_POST['room'];
      $module = $_POST['module'];
      $invigilator = $_POST['invigilator'];
     }
  
     $run = "INSERT INTO timetable (start_time, end_time, Day,room,module,invigilator) VALUES ('$start', '$end', '$day', '$room', '$module', '$invigilator')";
     mysqli_query($conn,$run);
  
     header('location: forms/module.php')
?>