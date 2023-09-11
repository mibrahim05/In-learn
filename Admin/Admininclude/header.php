<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
<!-- Boostrap Css -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">

<!-- Font Awesome Css -->
    <link rel="stylesheet" href="../css/all.min.css" >
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Google fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ubuntu+Mono:ital@1&display=swap" rel="stylesheet">

<!-- Custom Admin Css -->
<link rel="stylesheet" href="../css/adminstyle.css">
</head>
<body>
    <!-- Top Navbar -->
    <nav class="navbar navbar-dark fixed-top p-0 shadow" style="background-color: #1F5673;">
    <a href="adminDashboard.php" class="navbar-brand col-sm-3 col-md-2 mr-0">IN LEARN <small class="tex-white">Admin Area</small></a>
    </nav>
   <!-- Side Bar -->
   <div class="container-fluid mb-5" style="margin-top: 40px; background-color: #c3cbdc;
background-image: linear-gradient(147deg, #c3cbdc 0%, #edf1f4 74%);

">
    <div class="row" style="background: linear-gradient(359.3deg, rgb(196, 214, 252) 1%, rgba(187, 187, 187, 0) 70.9%);" >
        <nav class="col-sm-3 col-md-2 sidebar py-5 d-print-none" style="background-color:#576CA8;">
            <div class="sidebar-sticky" >
                <ul class="nav flex-column" >
                    <li class="nav-item nav-colr">
                        <a href="adminDashboard.php" class="nav-link nav-colr">
                            <i class="fas fa-tachometer-alt" ></i>
                            Dashboard
                        </a>
                    </li>
                    <li class="nav-item nav-colr">
                        <a href="courses.php" class="nav-link nav-colr">
                            <i class="fab fa-accessible-icon" ></i>
                            Courses
                        </a>
                    </li>
                     <li class="nav-item nav-colr">
                        <a href="lessons.php" class="nav-link nav-colr">
                            <i class="fab fa-accessible-icon" ></i>
                           Lessons
                        </a>
                    </li>
                    <li class="nav-item nav-colr">
                        <a href="students.php" class="nav-link nav-colr">
                            <i class="fas fa-users" ></i>
                           Students
                        </a>
                    </li>
                    <li class="nav-item nav-colr">
                        <a href="feedback.php" class="nav-link nav-colr">
                            <i class="fab fa-accessible-icon" ></i>
                           Feedback
                        </a>
                    </li>
                    <li class="nav-item nav-colr">
                        <a href="adminChangePass.php" class="nav-link nav-colr">
                            <i class="fas fa-key" ></i>
                          Change Password
                        </a>
                    </li>
                    <li class="nav-item nav-colr">
                        <a href="../logout.php" class="nav-link  nav-colr">
                            <i class="fas fa-sign-out-alt" ></i>
                          Logout
                        </a>
                    </li>
                </ul>
            </div>
        </nav>