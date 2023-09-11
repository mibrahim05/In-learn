<?php
include('./MainIncludeFol/header.php')
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
</head>
<body>
      <style>
            h4,h5{
                text-align:center;
                font-weight:normal;
                font-weight: bold;
                font-size: 30px;
            }
            p{
                display: grid;
            }
            .d1{
                text-align:center;
            }
            #text{
                text-align:center;
                padding:30px 40px;
            }
            .title{
                margin-top: 50px;
              
            }
            .bg{
                background-image: url('image/abtbg.jpg');
                background-repeat: no-repeat;
                background-size: cover;
            }
            .abt{
                display: block;
                margin-left: auto;
                margin-right: auto;
            }

            
        </style>   
        <div class="bg">
        <h4 class="title">About Us</h4>
        <img src="image/aboutusimg.png" alt="" width="150" height="150" class="abt">
        <h5>IN LEARN-virtual learning is the new way of learning</h5>
        <p id="text">IN-LEARN (e-learning management system)is a project which aims in providing online education with various courses. This project has login features, with educator as admin and student as a learner. They can login into there own portal individually.The admin can login from unique credentials and through which the admin can monitor the whole learning process.
            </p><br>
        <h4>Developed By</h4>
        <p class ="d1">MOHAMMED NIZAMUDDIN [20BCA0152]<br>
        MOHAMMED IBRAHIM [20BCA0154] <br>
        </p><br><br>
<div>
</body>
</html>

<?php
include('./MainIncludeFol/footer.php')
?>