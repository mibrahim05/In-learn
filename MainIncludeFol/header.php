<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Boostrap Css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Font Awesome Css -->
    <link rel="stylesheet" href="css/all.min.css">

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ubuntu+Mono:ital@1&display=swap" rel="stylesheet">

<!-- Student Testimonals Own Slider Css -->

<link rel="stylesheet"  type="text/css" href="css/owl.min.css">
<link rel="stylesheet"  type="text/css" href="css/owl.theme.min.css">
<link rel="stylesheet"  type="text/css" href="css/testyslider.css">

  <!-- Our Css -->
    <link rel="stylesheet" href="css/style.css?v=<?php echo time();?>">
    <title>IN LEARN</title>

  
</head>
<body>

<style>
  
</style>
<!-- Nav Bar -->

<nav class="navbar navbar-expand-lg navbar-light bg-light pl-5 fixed-top"  >
  <a class="navbar-brand" href="index.php">IN LEARN</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav custom-nav pl-5  ">
      <li class="nav-item custom-nav-item">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item custom-nav-item">
        <a class="nav-link" href="coursespage.php">Courses</a>
      </li>
      <li class="nav-item custom-nav-item">
        <a class="nav-link" href="aboutus.php">About Us</a>
      </li>
      <li class="nav-item custom-nav-item">
        <a class="nav-link" href="#Feedback">Feedback</a>
      </li>
      <li class="nav-item custom-nav-item">
        <a class="nav-link" href="#contact-us"> Contact Us</a>
      </li>
       </ul>
       <?php
       session_start();
       if(isset($_SESSION['is_login'])){
        echo' <ul class="navbar-nav  custom-nav pl-5  navbar-center ">
        <li class="nav-item custom-nav-item">
        <a class="nav-link" href="Student/studentProfile.php">My Profile</a>
      </li>
      <li class="nav-item custom-nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li> </ul';
       }
       else {
      echo '<ul class="nav navbar-nav nav-right ml-auto">
         <a class="btn btn-danger" href="login.php"> LOGIN/REGISTER</a>
      </ul>';
       }
       ?>
      
     
   
  </div>
    
</nav>
<br>
<br>
