<?php
session_start();
if(isset($_SESSION['name']) && isset($_SESSION['email'])){
    $name=$_SESSION['name'];
    $email=$_SESSION['email'];
    $pnum=$_SESSION['pnum'];
    $address=$_SESSION['address'];
  }
       include "../../connect.php";
       
    
        $_GET['cardid'];
        $id=$_GET['cardid'];

        $sql="SELECT * FROM books WHERE id=$id";
        $result=mysqli_query($con,$sql);
        $row=mysqli_fetch_assoc($result);
        $name=$row['name'];
        $price=$row['price'];
        $quantity=1;
        $link=$row['link'];
        $image=$row['images'];
        $check_sql="SELECT name FROM card WHERE name='$name'and email='$email'";
        $check_result=mysqli_query($con,$check_sql);
    
        if(mysqli_num_rows($check_result) > 0){
            
             header('location:perches.php');
                exit();
              

    }else{
        $int_q="INSERT INTO card (name,price,quantity,image,email) VALUES ('$name','$price','$quantity','$image','$email')";
        $result_q=mysqli_query($con,$int_q);
        header('location:perches.php');
                exit();
    }
        
        
        
        
       

   ?>
   <?php include "../../hf/footer.php";?>