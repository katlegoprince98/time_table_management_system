<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Course</title>
</head>
<body><br>
<form action="../model/model.php" method="post">
  <div class="mb-3">
  <div id="emailHelp" class="form-text">Create course</div><br><br>
    <label for="exampleInputEmail1" name="course_name" class="form-label">Course name</label>
    <input type="text" class="form-control" name="course_name" id="exampleInputPassword1">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Course code</label>
    <input type="text" class="form-control" name="course_code" id="exampleInputPassword1">
  </div>
  
  <button type="submit" class="btn btn-primary" name="course">Submit</button>
</form>
</body>
</html>