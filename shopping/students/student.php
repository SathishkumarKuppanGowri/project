
<?php
session_start();
include '../../connect.php';
if(isset($_POST['student_submit'])){
  $email=$_POST['student_email'];
  $password=$_POST['student_password'];
  if(empty($email) OR empty($password)){
    header("location:../../pages/shopping.php?serror=All fields are Required");

  }else{

    $sql="SELECT * FROM students WHERE email='$email' AND password='$password'";
    $result=mysqli_query($con,$sql);
    if(mysqli_num_rows($result)>0){
        $row=mysqli_fetch_assoc($result);
        $_SESSION['row']=$row['id'];
        $_SESSION['name']=$row['name'];
        $_SESSION['email']=$row['email'];
        $_SESSION['pnum']=$row['pnum'];
        $_SESSION['address']=$row['address'];
            header("location:perches.php");
            exit();

        }
        else{
          header("location:../../pages/shopping.php?serror=Please Enter valid Credantial");
    exit();
        }
    }

    
  }




?>
