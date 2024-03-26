
<?php include '../../connect.php';?>
<?php
session_start();
if(isset($_POST['admin_submit'])){
  $email=$_POST['admin_email'];
  $password=$_POST['admin_password'];
  if(empty($email) OR empty($password)){
    header("location:../../pages/shopping.php?aerror=All fields are Required");
    exit();
  }else{
    
    $sql="SELECT * FROM admin WHERE email='$email' AND password='$password'";
    $result=mysqli_query($con,$sql);
    
    if(mysqli_num_rows($result)>0){
       $row=mysqli_fetch_assoc($result);
        $_session['row']=$row['id'];
        $_session['name']=$row['name'];
        header("location:admindashborad.php");
        
      }
      else{
        header("location:../../pages/shopping.php?aerror=Please Enter valid Credantial");
        exit(); 
      }
      

    
  }

}


?>
