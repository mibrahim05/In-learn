<!-- Start of Including Header.php -->
<?php
include('./MainIncludeFol/header.php');
?>
<!-- End of Including Header.php -->

<!-- Nav Bar -->


<!-- This is form style css file -->
<link rel="stylesheet" href="css/formstyle.css">


<nav class="navbar navbar-expand-lg navbar-light bg-light pl-5 fixed-top">
  <a class="navbar-brand" href="index.php">IN LEARN </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav  custom-nav pl-5 ">
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
        <a class="nav-link" href="#">Feedback</a>
      </li>
      <li class="nav-item custom-nav-item">
        <a class="nav-link" href="#"> Contact Us</a>
      </li>
       </ul> 
       <ul class="nav navbar-nav nav-right ml-auto">
        <p>Welcome to login page!</p>
      </ul>
   
  </div>
    
</nav>
<!-- End of Nav Bar -->

  <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form id="stuLoginForm" action="#" class="sign-in-form">
            <h2 class="title">LOGIN</h2>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Email" name="stuLogEmail" id="stuLogEmail" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="stuLogPass" id="stuLogPass"/>
            </div>
            <input  value="LOGIN" class="btn solid" onclick="checkStuLogin()" id="stuLoginBtn"/>
            <small id="statusLogMsg"></small>
          </form>
          <form action="#" class="sign-up-form" id="stuRegForm">
            <h2 class="title">Sign up</h2>
            <small id="statusMsg1"></small>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" name="stuname" id="stuname" />
            </div>   
            <small id="statusMsg2"></small>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Email" name="stuemail" id="stuemail" />
            </div>
            <small id="statusMsg"></small>
            <div class="input-field">
              <i class="fas fa-lock"></i>  
              <input type="password" placeholder="Password" name="stupass" id="stupass" />
            </div>
            <input class="btn" value="Sign up" onclick = "addStu()"  id="signup" />
           <h4 id="successMsg"></h4>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Hello!</h3>
            <p>
            Welcome to IN LEARN
            To keep connected 
            <br>
             Enter Your login details  
            </p>

            <br> 
            <br>
            <p>New user? Create an account</p>
            <button class="btn transparent" id="sign-up-btn">SIGN UP</button>
          </div>
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3> Welcome to IN LEARN!</h3>
            <p>Enter your Personal details</p>
            <br>
            <br>
            <p>
            Already Have an account? <br> Sign in 
            </p> 
            <button class="btn transparent" id="sign-in-btn">Sign in</button>
          </div>
          </div>
      </div>
    </div>
    <!-- End  Student Registration -->

   <!-- Start of Including Footer.php -->
 <?php
    include('./MainIncludeFol/formfooter.php');
  ?>
<!-- End of Including Footer.php -->