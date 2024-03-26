<?php 
session_start();
if(isset($_SESSION['name']) && isset($_SESSION['email'])){
  $name=$_SESSION['name'];
  $email=$_SESSION['email'];
  $pnum=$_SESSION['pnum'];
  $address=$_SESSION['address'];
  
  
        
        
}
$card="SELECT * FROM card Where email='$email'";
$card_result=mysqli_query($con,$card);

if(mysqli_num_rows($card_result)>0){
  $row_count=mysqli_num_rows($card_result);
}else{
  $row_count="";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
<nav class="navbar navbar-expand-xxl navbar-dark bg-dark fixed-top">
<div class="container-fluid ">
<a class="navbar-brand " href="../../pages/homepage.php?home=active"><img src="../../images/logo/logo-final.png" width="20" height="20" alt="logo"> UPSC <span>.</span></a>

<a class="nav-link text-light  ms-auto p-1" href="card_details.php">card <sup><?php echo  $row_count;?></sup></a>
<button class="navbar-toggler text-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon text-light"></span>
  </button>
  
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav me-auto">
        <li class="nav-item">
        <a href="perches.php" class="text-light btn ">Home</a>
        </li>
        <li class="nav-item">
        <a href="profile.php" class="text-light btn ">Profile</a>
        </li>
        <li class="nav-item">
        <a href="order_details.php" class="text-light btn ">Order Details</a>
        </li>
        <li class="nav-item">
        <a href="student_logout.php" class="text-light btn ">Logout</a>
        </li>
      </ul>
  
  </div>
</div>
</nav>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
