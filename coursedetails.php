<!-- Start of Including Header.php -->
<?php
include('./dbConnection.php');
include('./MainIncludeFol/header.php');
?>
<!-- End of Including Header.php -->
<br>
<div class="container-fluid bg-dark"> <!-- Start Course Page Banner -->
      <div class="row">
        <img src="./image/coursebanner.jpg" alt="courses" style="height:200px; width:100%; object-fit:cover; box-shadow:10px;"/>
      </div> 
    </div> <!-- End Course Page Banner -->
    <div class="container mt-5"> <!-- Start All Course -->
      <?php
          if(isset($_GET['course_id'])){
           $course_id = $_GET['course_id'];
           $_SESSION['course_id'] = $course_id;
           $sql = "SELECT * FROM course WHERE course_id = '$course_id'";
          $result = $conn->query($sql);
          if($result->num_rows > 0){ 
            while($row = $result->fetch_assoc()){
              echo ' 
                <div class="row">
                <div class="col-md-4">
                  <img src="'.str_replace('..', '.', $row['course_img']).'" class="card-img-top" alt="Guitar" />
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">Course Name: '.$row['course_name'].'</h5>
                    <p class="card-text"> Description: '.$row['course_desc'].'</p>
                    <p class="card-text"> Duration: '.$row['course_duration'].'</p>
                    <form action="checkout.php" method="post">

                      <p class="card-text d-inline">Price: <small><del>&#8377 '.$row['course_original_price'].'</del></small> <span class="font-weight-bolder">&#8377 '.$row['course_price'].'<span></p>
                      <input type="hidden" name="id" value='. $row["course_price"] .'> 
                      <button type="submit" class="btn btn-primary text-white font-weight-bolder float-right" name="enroll">Enroll</button>
                    </form>
                  </div>
                </div>
              ';
            }
          }
         }
        ?>   
      </div>

    <div class="container">
        <div class="row">
             <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th scope="col">Lesson No:</th>
                        <th scope="col">Lesson Name:</th>
                    </tr>
                </thead>
            <tbody>
        <?php 
        $sql = "SELECT * FROM lesson";
        $result = $conn->query($sql);
        if($result->num_rows > 0){
            $num = 0;
            while($row = $result->fetch_assoc()){
                if($course_id == $row['course_id']){
                    $num++;
                echo '<tr>
                    <th scope="row">'.$num.'</th>
                    <td>'.$row['lesson_name'].'</td>
                </tr>';
                }

            }
        }
        ?>
           
                
            </tbody>
            </table>
        </div>
    </div>
</div>
<!-- End  of Course details page -->


<!-- Start of Including Footer.php -->
 <?php
    include('./MainIncludeFol/footer.php');
  ?>
<!-- End of Including Footer.php -->


