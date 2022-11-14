<?php

   include ('config.php');
  /////////////////////////////////////////////////////////////////////////////////
  // insert courser into database ///////
   if(isset($_POST['course'])){
      $course_name =ucwords( $_POST['course_name']);
      $course_code = $_POST['course_code'];

      $run = 'INSERT INTO course (course_name, course_code) VALUES ("'.$course_name.'", "'.$course_code.'")';
      mysqli_query($conn,$run);
      ?>
      <script>
        window.alert('Course created successfully created');
    
      </script>
      <?php
      header ('location:../forms/course.php');
   }
?>