<?php
 session_start();

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
   ///////////////////////////////////////////////////////////////////////////
   // select list of course name to obtain course ID
    
     include ('config.php');
    $get = 'SELECT course_name FROM course'; 
    return $conn->query($get);
    while($row = mysqli_fetch_assoc($result)){
      $_SESSION['options'] = 'ff'; 
    }
    



   if(isset($_POST['course'])){
      $course = $_POST['course'];
      $fac_name = $_POST['fac_name'];
      $fac_code = $_POST['fac_code'];

      
   }
?>