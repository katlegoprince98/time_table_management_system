<?php
   include('../model/faculty.php');
   $result = getCourseName();
   $option = '';
   while($row = mysqli_fetch_assoc($result)){
     $option = $option . '<option>'.$row["course_name"].'</option>';
   }   

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Faculty</title>
</head>
<body><br><br>
<form method="post" action="../model/faculty.php">
<select name="course" id="">
        <option >-- select course--</option>
        <option value="?php echo ($option);  ?>"><?php echo $option;  ?></option>
    </select><br><br>
  <div class="mb-3">
    
    <label for="exampleInputEmail1" class="form-label">Faculty name</label>
    <input type="text" class="form-control" name="fac_name"  id="exampleInputPassword1">
    <div id="emailHelp" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1"  class="form-label">Faculty code</label>
    <input type="text" class="form-control" name="fac_code"  id="exampleInputPassword1">
  </div>
  
  <button type="submit" name="faculty" class="btn btn-primary">Submit</button>
</form>
</body>
</html>