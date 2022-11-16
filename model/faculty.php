<?php
  include ('config.php');

   function getCourseName(){
    include ('config.php');
    $get = 'SELECT course_name FROM course'; 
    return mysqli_query($conn,$get);
  
  }
  
 if(isset($_POST['course'])){
    $course = $_POST['course'];
    $fac_name = $_POST['fac_name'];
    $fac_code = $_POST['fac_code'];

    $obt = 'SELECT course_id FROM course WHERE course_name = "$course"';
    $id = mysqli_query($conn,$obt);

    $put = 'INSERT INTO faculty (course_id, faculty_name, faculty_code)
     VALUES ("$course","$fac_name","$id")';
     mysqli_query($conn,$put);

     ?>
    <script>
      window.alert('Faculty created successfully created');
  
    </script>
    <?php
    header ('location:../forms/faculty.php');
    
 }


?>