<!-- Include of header -->
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

 
if(isset($_REQUEST['lessonSubmitBtn'])){
    // Checking for Empty Fields
    if(($_REQUEST['lesson_name'] == "") || ($_REQUEST['lesson_desc'] == "") || ($_REQUEST['course_id'] == "") || ($_REQUEST['course_name'] == "")){
        // Messge will be displayed if the required are empty and not filled
        $msg = '<div class = "alert alert-warning col-sm-6 ml-5 mt-2">Fill All Fields</div>';
    }else {
        $lesson_name = $_REQUEST['lesson_name'];
        $lesson_desc = $_REQUEST['lesson_desc'];
        $course_id = $_REQUEST['course_id'];
        $course_name = $_REQUEST['course_name'];
        $lesson_link = $_FILES['lesson_link']['name'];
        $lesson_link_temp = $_FILES['lesson_link']['tmp_name'];
        $link_folder = '../lessonvid/'.$lesson_link;
        move_uploaded_file($lesson_link_temp, $link_folder);

        $sql = "INSERT INTO lesson (lesson_name, lesson_desc, lesson_link, course_id, course_name) VALUES ('$lesson_name', '$lesson_desc','$link_folder', '$course_id', '$course_name')";
         if($conn->query($sql) == TRUE){
            // below msg display on form submit success
             $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2"> Lesson Added Successfully </div>';
            } else {
                 // below msg display on form submit failed
                 $msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2">  Unable to Add Lesson </div>';
                 }
    }
}
?>


<div class="col-sm-6 mt-5 mx-3 jumbotron">
    <h3 class="text-center">Add New Lessons</h3>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="course_id">Course ID</label>
            <input type="text" class="form-control" name="course_id" id="course_id" value="<?php if(isset($_SESSION['course_id'])){echo $_SESSION['course_id'];}?>" readonly>
        </div>
        <div class="form-group">
            <label for="course_name">Course Name</label>
              <input type="text" class="form-control" name="course_name" id="course_name" value="<?php if(isset($_SESSION['course_name'])){echo $_SESSION['course_name'];}?>" readonly>
        </div>
        <div class="form-group">
            <label for="lesson_name">Lesson Name</label>
            <input type="text" class="form-control" name="lesson_name" id="lesson_name">
        </div>
        <div class="form-group">
            <label for="lesson_desc">Lesson Description</label>
            <textarea name="lesson_desc" id="lesson_desc" class="form-control" row = 2></textarea>
        </div>
          <div class="form-group">
            <label for="lesson_link">Lesson Video Link</label>
            <input type="file" class="form-control-file" name="lesson_link" id="lesson_link">
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-danger" id="lessonSubmitBtn" name="lessonSubmitBtn">Submit</button>
            <a href="lessons.php" class="btn btn-secondary">Close</a>
        </div> 
        <?php
        if(isset($msg)){
            echo $msg;
        }
        ?>    
    </form>
</div>


 </div><!-- div Row close from header -->
</div> <!-- div Container-fluid from close from header -->

<!-- Include of footer -->
<?php
include('./Admininclude/footer.php');
?>