<?php 
include('./dbConnection.php');
session_start();
if(!isset($_SESSION['stuLogEmail'])) {
 echo "<script> location.href='login.php'; </script>";
} else { 
 date_default_timezone_set('Asia/Kolkata');
 $date = date('d-m-y h:i:s');
 if(isset($_POST['ADD_ID']) && isset($_POST['TXN_AMOUNT'])){
  $add_id = $_POST['ADD_ID'];
  $stu_email = $_SESSION['stuLogEmail'];
  $course_id = $_SESSION['course_id'];
  $status = "Success";
  $respmsg = "Done";
  $amount = $_POST['TXN_AMOUNT'];
  $date = $date;
  $sql = "INSERT INTO courseadd(add_id, stu_email, course_id, status, respmsg, amount, add_date) VALUES ('$add_id', '$stu_email', '$course_id', '$status', '$respmsg', '$amount', '$date')";
   if($conn->query($sql) == TRUE){
    echo "Redirecting to My Profile....";
    echo "<script> setTimeout(() => {
     window.location.href = './Student/myCourse.php';
   }, 1500); </script>";
   };
 } else {
 echo "<b>Transaction status is failure</b>" . "<br/>";
 }
}
?>