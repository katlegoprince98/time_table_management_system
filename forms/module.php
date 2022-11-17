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
<body><br><br>
<form action="../forms/module.php" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Start date</label>
    <input type="text" name="start" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">End date</label>
    <input type="text" name="end" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Day</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" name="day" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Room</label>
    <input type="text" name="room" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Module</label>
    <input type="text" name="module" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Invigilator</label>
    <input type="text" name="invigilator" class="form-control" id="exampleInputPassword1">
  </div>
  
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>
