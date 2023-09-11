<?php
if(!isset($_SESSION)){ 
  session_start(); 
}

include('./adminInclude/header.php'); 
include('../dbConnection.php');

 if(isset($_SESSION['is_admin_login'])){
  $adminEmail = $_SESSION['adminLogEmail'];
 } else {
  echo "<script> location.href='../index.php'; </script>";

 }
  $sql = "SELECT * FROM course";
  $result = $conn->query($sql);
  $totalcourse = $result->num_rows;

  $sql = "SELECT * FROM student1";
  $result = $conn->query($sql);
  $totalstu = $result->num_rows;

  $sql = "SELECT * FROM courseadd";
  $result = $conn->query($sql);
  $totaladd = $result->num_rows;
?>
        <div class="col-sm-9 mt-5">
            <div class="row mx-5 text-center">
                <div class="col-sm-4 mt-5">
                    <div class="card text-white bg-danger mb-3" style="max-width:18rem ;">
                    <div class="card-header">Courses</div>
                    <div class="card-body">
                        <h4 class="card-title">
                           <?php echo $totalcourse; ?>
                        </h4>
                        <a href="courses.php" class="btn text-white">
                            View
                        </a>
                    </div>
                </div>
                </div>
                     <div class="col-sm-4 mt-5">
                    <div class="card text-white bg-success mb-3" style="max-width:18rem ;">
                    <div class="card-header">Students</div>
                    <div class="card-body">
                        <h4 class="card-title">
                          <?php echo $totalstu; ?>
                        </h4>
                        <a href="students.php" class="btn text-white">
                            View
                        </a>
                    </div>
                </div>
                </div>
                     <div class="col-sm-4 mt-5">
                    <div class="card text-white bg-info mb-3" style="max-width:18rem ;">
                    <div class="card-header">Added</div>
                    <div class="card-body">
                        <h4 class="card-title">
                          <?php echo $totaladd; ?>
                        </h4>
                        <p class="text-white">
                            Courses Added
                        </p>
                    </div>
                </div>
                </div>
            </div>

            <div class="mx-5 mt-5 text-center">
                <!-- Table -->
                <p class="bg-dark text-white p-2" >
                    Courses Added
                </p>
                 <?php
      $sql = "SELECT * FROM courseadd";
      $result = $conn->query($sql);
      if($result->num_rows > 0){
  echo '<table class="table">
    <thead>
    <tr>
      <th scope="col">Added ID</th>
      <th scope="col">Course ID</th>
      <th scope="col">Student Email</th>
      <th scope="col">Order Date</th>
      <th scope="col">Amount</th>
      <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>';
    while($row = $result->fetch_assoc()){
    echo '<tr>';
      echo '<th scope="row">'.$row["add_id"].'</th>';
      echo '<td>'. $row["add_id"].'</td>';
      echo '<td>'.$row["stu_email"].'</td>';
      echo '<td>'.$row["add_date"].'</td>';
      echo '<td>'.$row["amount"].'</td>';
      echo '<td><form action="" method="POST" class="d-inline"><input type="hidden" name="id" value='. $row["co_id"] .'><button type="submit" class="btn btn-secondary" name="delete" value="Delete"><i class="far fa-trash-alt"></i></button></form></td>';
      echo '</tr>';
    }
  echo '</tbody>
  </table>';
  } else {
    echo "0 Result";
  }
  if(isset($_REQUEST['delete'])){
    $sql = "DELETE FROM courseadd WHERE co_id = {$_REQUEST['id']}";
    if($conn->query($sql) === TRUE){
      // echo "Record Deleted Successfully";
      // below code will refresh the page after deleting the record
      echo '<meta http-equiv="refresh" content= "0;URL=?deleted" />';
      } else {
        echo "Unable to Delete Data";
      }
   }
  ?>
            </div>
        </div>
</div>
</div>

    </div>
   </div>

    <?php
    include('./Admininclude/footer.php');
    ?>