<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Create a resume</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <style>
  .fakeimg {
    height: 500px;
    
  }
  </style>
</head>
<body>

<div class="p-5 bg-primary text-white text-center">
  <h1>Create your own personalised resume</h1>
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="resumebuilder.php">Enter your details</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="create_resume.php">Create your resume</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
    </ul>
  </div>
</nav>

<div class="container mt-5">
  <div class="row">
    <div class="col-sm-4">
      <p>Create Your own personalised Resume</p>
      <!-- <ul class="nav nav-pills flex-column">
        <li class="nav-item">
        <li class="nav-item">
            <a class="nav-link " href="personaldetails.php">Personal Details</a>
          </li>
          <a class="nav-link " href="Educational Qualifications.php">Educational Qualificatoins</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="pastexperience.php">Past Experience</a>
        </li>
          <a class="nav-link" href="skills.php">Skills</a>
        </li>
      </ul> -->
      <hr class="d-sm-none">
    </div>
    <div class="col-sm-8">
      <h2>Demo Resume</h2>
      <div class="fakeimg">
        <img src="image.png" alt="" style="width:150px;height:200px;">
      </div>
      <p>Get your very own resume you can access, share and edit really easily.</p>
      

     
    </div>
  </div>
</div>

<div class="mt-5 p-4 bg-dark text-white text-center">
  <p>Thank you</p>
</div>

</body>
</html>