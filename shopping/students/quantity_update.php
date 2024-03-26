<?php
include "../../connect.php";
if(isset($_POST['update'])){
    $id=$_POST['id'];
    $quantity=$_POST['quantity'];
    
    $update="UPDATE card SET quantity='$quantity' WHERE id='$id'";
    $update_result=mysqli_query($con,$update);
    if($update_result){
        header('location: card_details.php');
        exit();
    }else{
        header('location:test.php');
    }

}
?>