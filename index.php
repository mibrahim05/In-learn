<!-- Start of Including Header.php -->
<?php
include('./dbConnection.php');
include('./MainIncludeFol/header.php');
?>
<!-- End of Including Header.php -->

<!-- End of Nav Bar -->



<!-- Start of Carousel -->


  <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/carousel2.jpg"  class="d-block vh-100 vw-100 object-cover crimg" alt="...">
      <div  class="carousel-caption d-none d-md-block">
        <h5 class="crtxt" >Welcome to IN-LEARN</h5>
        <p class="crtxt">Virtual Learning is the new way of learning</p>
         <?php
         if(!isset($_SESSION['is_login'])){
          echo '<a href="login.php" class="btn btn-danger mt-3">Get Started </a>';
         }else {
          echo'<a class="btn btn-primary mt-3" href="Student/studentProfile.php">My Profile</a>';
         }
        ?>
      </div>
    </div>
    <div class="carousel-item" data-interval="3000">
      <img src="image/carousel1.jpg"  class="d-block vh-100 vw-100 object-cover" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 class="crtxt">IN-LEARN is the best platform to get started</h5>
        <p class="crtxt">We provide quality courses for the students</p>
         <?php
         if(!isset($_SESSION['is_login'])){
          echo '<a href="login.php" class="btn btn-danger mt-3">Get Started </a>';
         }else {
          echo'<a class="btn btn-primary mt-3" href="Student/studentProfile.php">My Profile</a>';
         }
        ?>
      </div>
    </div>
    <div class="carousel-item" data-interval="3000">
      <img src="image/carousel3.jpg"  class="d-block vh-100 vw-100 object-cover" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 class="crtxt">IN-LEARN is among top e learning websites</h5>
        <p class="crtxt">IN learn provides courses free of cost for the students</p>
         <?php
         if(!isset($_SESSION['is_login'])){
          echo '<a href="login.php" class="btn btn-danger mt-3">Get Started </a>';
         }else {
          echo'<a class="btn btn-primary mt-3" href="Student/studentProfile.php">My Profile</a>';
         }
        ?>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
      
<!-- End of Carousel -->



<!-- Start of Banner -->

<!-- End of Banner -->


<!-- Start Most popular Course -->
 <div class="container mt-5" style="background: linear-gradient(89deg, rgb(21, 74, 189) 0.1%, rgb(26, 138, 211) 51.5%, rgb(72, 177, 234) 100.2%);">
   <!-- Start Most Popular Course -->
      <h1 class="text-center">Courses Offered</h1>
      <div class="card-deck mt-4"> <!-- Start Most Popular Course 1st Card Deck -->
        <?php
        $sql = "SELECT * FROM course LIMIT 3";
        $result = $conn->query($sql);
        if($result->num_rows > 0){ 
          while($row = $result->fetch_assoc()){
            $course_id = $row['course_id'];
            echo '
            <a href="coursedetails.php?course_id='.$course_id.'" class="btn" style="text-align: left; padding:0px; margin:0px;">
              <div class="card">
                <img src="'.str_replace('..', '.', $row['course_img']).'" class="card-img-top" alt="Guitar" />
                <div class="card-body">
                  <h5 class="card-title">'.$row['course_name'].'</h5>
                  <p class="card-text">'.$row['course_desc'].'</p>
                </div>
                <div class="card-footer">
                  <p class="card-text d-inline">Price: <small><del>&#8377 '.$row['course_original_price'].'</del></small> <span class="font-weight-bolder">&#8377 '.$row['course_price'].'<span></p> <a class="btn btn-primary text-white font-weight-bolder float-right" href="coursedetails.php?course_id='.$course_id.'">Enroll</a>
                </div>
              </div>
            </a>  ';
          }
        }
        ?>   
      </div>  <!-- End Most Popular Course 1st Card Deck -->   
      <div class="card-deck mt-4"> <!-- Start Most Popular Course 2nd Card Deck -->
        <?php
          $sql = "SELECT * FROM course LIMIT 3,3";
          $result = $conn->query($sql);
          if($result->num_rows > 0){ 
            while($row = $result->fetch_assoc()){
              $course_id = $row['course_id'];
              echo '
                <a href="coursedetails.php?course_id='.$course_id.'"  class="btn" style="text-align: left; padding:0px;">
                  <div class="card">
                    <img src="'.str_replace('..', '.', $row['course_img']).'" class="card-img-top" alt="Guitar" />
                    <div class="card-body">
                      <h5 class="card-title">'.$row['course_name'].'</h5>
                      <p class="card-text">'.$row['course_desc'].'</p>
                    </div>
                    <div class="card-footer">
                      <p class="card-text d-inline">Price: <small><del>&#8377 '.$row['course_original_price'].'</del></small> <span class="font-weight-bolder">&#8377 '.$row['course_price'].'<span></p> <a class="btn btn-primary text-white font-weight-bolder float-right" href="coursedetails.php?course_id='.$course_id.'">Enroll</a>
                    </div>
                  </div>
                </a>  ';
            }
          }
        ?>
      </div>   <!-- End Most Popular Course 2nd Card Deck --> 
      <div class="text-center m-2">
        <a class="btn btn-danger btn-sm" href="coursespage.php">View All Course</a> 
      </div>
    </div> 
    <br>
<!-- End of Popular Course -->

<!--Start Contact Us-->
<?php
include('./contact.php');
?>

<!-- End Contact Us -->


<!-- Start of Feedback -->
<div class="container-fluid mt-5" style="background-color:#72788D" id="Feedback">
        <h1 class="text-center testyheading p-4"> Student's Feedback </h1>
        <div class="row">
          <div class="col-md-12">
            <div id="testimonial-slider" class="owl-carousel">

            <?php
            $sql = "SELECT s.stu_name, s.stu_occ, s.stu_img, f.f_content FROM student1 AS s  JOIN feedback AS f ON s.stu_id = f.stu_id";
            $result = $conn->query($sql);
            if($result->num_rows > 0){
              while($row = $result->fetch_assoc()){
                $s_img = $row['stu_img'];
                $n_img = str_replace('..', '.', $s_img);
           
            ?>
              <div class="testimonial">
                <p class="description">
                  <?php echo $row['f_content']; ?>
                </p>
                <div class="pic">
                  <img src="<?php echo $n_img ?>" alt=""/>
                </div>
                <div class="testimonial-prof">
                  <h4><?php echo $row['stu_name'];?> </h4>
                  <small><?php echo $row['stu_occ']; ?></small>
                </div>
              </div>
              <?php }
            }?>
            </div>
          </div>
        </div>
</div>
 <!-- End of Feedback -->


<!-- Start of social follow -->
<div class="container-fluid" style="background-color:#0D3B66;">
        <div class="row text-white text-center p-1">
          <div class="col-sm">
            <a class="text-white social-hover" href="#"><i class="fab fa-facebook-f"></i> Facebook</a>
          </div>
          <div class="col-sm">
            <a class="text-white social-hover" href="#"><i class="fab fa-twitter"></i> Twitter</a>
          </div>
          <div class="col-sm">
            <a class="text-white social-hover" href="#"><i class="fab fa-whatsapp"></i> WhatsApp</a>
          </div>
          <div class="col-sm">
            <a class="text-white social-hover" href="#"><i class="fab fa-instagram"></i> Instagram</a>
          </div>
        </div>
    </div> 
<!-- End of social follow -->



<!-- Start of About Section -->
<div class="container-fluid p-4" style="background-color:#E9ECEF">
      <div class="container" style="background-color:#E9ECEF">
        <div class="row text-center">
          <div class="col-sm">
            <h5>About Us</h5>
              <p>IN LEARN provides you the extraction of learning courses offered to the user in friendly manner</p>
          </div>
          <div class="col-sm">
            <h5>Category</h5>
            <a class="text-dark" href="#">Fundamentals of Programming</a><br />
            <a class="text-dark" href="#">C Programming</a><br />
            <a class="text-dark" href="#">C++ Programming</a><br />
            <a class="text-dark" href="#">zero to hero Pyton course</a><br />
            <a class="text-dark" href="#">Java Course</a><br />
          </div>
          <div class="col-sm">
            <h5>Contact Us</h5>
            <p>IN LEARN.in <br>Vellore<br>Ph. 000000000<br>632011</p>
          </div>
        </div>
      </div>
    </div> 
<!-- Start of Including Footer.php -->
 <?php
    include('./MainIncludeFol/footer.php');
  ?>
<!-- End of Including Footer.php -->

   