<?php
require_once('server.php');
if (isset($_POST['subbtn'])) {
  $name=$_POST['name'];
  $roll=$_POST['roll'];
  $dept=$_POST['dept'];
  $email=$_POST['email'];
  $pass=$_POST['pass'];

  $query= "INSERT INTO student_table (name, roll, dept, email, pass) VALUES 
  ('$name', '$roll', '$dept', '$email', '$pass')";

  if (mysqli_query($conn, $query)) {
    $alerts= "Data Insert Successfully";
  }

  else{
    echo "Error To Insert". "<br/>" . $query . "<br/>". mysqli_error($conn);
  }

  mysqli_close($conn);
}


?>

<!doctype html>
<html>
<head>
    <title>Simple Management Project </title>
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/custom.css">
</head>
       
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="dashboard.php">School Management Project</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="dashboard.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          For Students
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="add_student.php">Add Student Information</a>
          <a class="dropdown-item" href="#">View Student Information</a>
        </div>
      </li>
       
       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          For Teachers
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="add_teacher.php">
          Add Teacher Information</a>
          <a class="dropdown-item" href="#">View Teacher Information</a>
        </div>
      </li>
    </ul>
    <form class="form-inline">
      <input class="form-control mr-sm-2" type="search" placeholder="Search By Roll" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav> 

<!-- Alert Section below -->

<div class="col-md-6">
  <div class="container">
      <div class="bg-success text-white">
        <?php
          if (isset($alerts)) {
            echo $alerts;
          }
        ?>
      </div>
  </div>
</div>

<!-- Form Section Start -->
<div class="col-md-6">
<div class="container">    
<form action="" method="post">
  <div class="form-group">
    <label for="name"> Student Name </label>
    <input type="text" class="form-control" placeholder="Enter Your Name"
     id="name" name="name" required>
  </div>

  <div class="form-group">
    <label for="roll">Student Roll </label>
    <input type="text" class="form-control" placeholder="Enter Your Name"
     id="roll" name="roll" required>
  </div>

  <div class="form-group">
    <label for="dept">Student Department </label>
    <input type="text" class="form-control" placeholder="Enter Your Name"
     id="dept" name="dept" required>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="pass" required>
  </div>
  <button type="submit" class="btn btn-primary" name="subbtn">Submit</button>
</form>
</div>
</div>
<!-- End For Form Section -->


         
<!--  Code For Footer Section -->
  <hr/>
    <footer class="container">
      <p>&copy; Simple School Management Project.  2017-<?php echo date("Y");?></p>
    </footer>
          
<!-- Jquery ANd Bootstrap Js -->
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script> 
    <script type="text/javascript" src="js/bootstrap.min.js"></script> 
</body>
</html>