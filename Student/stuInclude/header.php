<?php
include_once('../dbConnection.php');
if(!isset($_SESSION)){
    session_start();
}
if(isset($_SESSION['is_login'])){
    $stuLogEmail = $_SESSION['stuLogEmail'];
}

if(isset($stuLogEmail)){
    $sql = "SELECT stu_img FROM student1 WHERE stu_email = '$stuLogEmail'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $stu_img = $row['stu_img'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <!-- Boostrap Css -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- Font Awesome Css -->
    <link rel="stylesheet" href="../css/all.min.css">

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ubuntu+Mono:ital@1&display=swap" rel="stylesheet">

<!-- Custom Css -->
<link rel="stylesheet" href="../css/stustyle.css">
</head>
<body>
    <!-- Top NAVBAR -->
    <nav class="navbar navbar-dark fixed-top flex-md-nowrap p-0 shadow" style="background-color: #225470;">
    <a href="studentProfile.php" class="navbar-brand col-sm-3 col-md-2 mr-0">
        IN LEARN
    </a> 
    </nav>

    <!-- Side Bar -->
    <div class="container-fluid mb-5" style="margin-top: 40px;">
    <div class="row" style="background: linear-gradient(178deg, rgba(201, 234, 252, 0.51) 14.9%, rgba(139, 192, 216, 0.73) 80%);">
        <nav class="col-sm-2 sidebar py-5 d-print-none" style="background-color:#225470 ;">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item mb-3 nav-colr">
                        <img src="<?php echo $stu_img?>" alt="studentImage" class="img-thumbnail rounded-circle">
                    </li>
                    <li class="nav-item nav-colr nav-colr">
                        <a href="studentProfile.php" class="nav-link nav-colr"  >
                        <i class="fas fa-user"></i>Profile <span class="sr-only">(current)</span>
                    </a>
                    </li>
                    <li class="nav-item nav-colr">
                        <a href="myCourse.php" class="nav-link nav-colr" >
                            <i class="fab fa-accessible-icon"></i>
                            My Courses
                        </a>
                    </li>
                     <li class="nav-item nav-colr">
                        <a href="stufeedback.php" class="nav-link nav-colr" >
                            <i class="fab fa-accessible-icon"></i>
                            Feedback
                        </a>
                    </li>
                    <li class="nav-item nav-colr">
                        <a href="studentChangePass.php" class="nav-link nav-colr" >
                            <i class="fas fa-key"></i>
                            Change Password
                        </a>
                    </li>
                    <li class="nav-item nav-colr">
                        <a href="../logout.php" class="nav-link nav-colr" >
                            <i class="fas fa-sign-out-alt"></i>
                            Logout
                        </a>
                    </li>
                    
                </ul>
            </div>
        </nav>

    
