<?php
include('./dbConnection.php');
session_start();
if(!isset($_SESSION['stuLogEmail'])){
    echo "<script> location.href = 'login.php'</script>";
}else {
$stuEmail = $_SESSION['stuLogEmail'];
   ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <!-- Boostrap Css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Font Awesome Css -->
    <link rel="stylesheet" href="../css/all.min.css" >
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ubuntu+Mono:ital@1&display=swap" rel="stylesheet">

  <!-- Our Css -->
    <link rel="stylesheet" href="css/style.css?v=<?php echo time();?>">
    
   <title>Checkout</title>
</head>
<body>
    <div class="container mt-5">
    <div class="row">
    <div class="col-sm-6 offset-sm-3 jumbotron">
    <h3 class="mb-5">Welcome to IN-LEARN Checkout Page</h3>
    <form method="post" action="./enrolldone.php">
      <div class="form-group row">
       <label for="ADD_ID" class="col-sm-4 col-form-label">ADD ID</label>
       <div class="col-sm-8">
         <input id="ADD_ID" class="form-control" tabindex="1" maxlength="20" size="20" name="ADD_ID" autocomplete="off"
          value="<?php echo  "ORDS" . rand(10000,99999999)?>" readonly>
       </div>
      </div>
      <div class="form-group row">
       <label for="CUST_ID" class="col-sm-4 col-form-label">Student Email</label>
       <div class="col-sm-8">
         <input id="CUST_ID" class="form-control" tabindex="2" maxlength="12" size="12" name="CUST_ID" autocomplete="off" value="<?php if(isset($stuEmail)){echo $stuEmail; }?>" readonly>
       </div>
      </div>
      <div class="form-group row">
       <label for="TXN_AMOUNT" class="col-sm-4 col-form-label">Amount</label>
       <div class="col-sm-8">
        <input title="TXN_AMOUNT" class="form-control" tabindex="10"
          type="text" name="TXN_AMOUNT" value="<?php if(isset($_POST['id'])){echo $_POST['id']; }?>" readonly>
       </div>
      </div>
      <div class="text-center">
       <input value="Check out" type="submit" class="btn btn-primary checkout1" onclick="">
       <a href="./courses.php" class="btn btn-secondary">Cancel</a>
      </div>
     </form>
     <small class="form-text text-muted">Note: Complete your enrollment by Clicking Checkout Button</small>
     </div>
    </div>
  </div>

      <!-- Jquery and Boostrap JavaScript -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- Font Awesome JS -->
    <script type="text/javascript" src="js/all.min.js"></script>

    <!-- Custom JavaScript -->
    <script type="text/javascript" src="js/custom.js"></script>
    
</body>
</html>


<?php }
?>
