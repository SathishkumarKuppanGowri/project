<?php
include '../../connect.php';
include "../nav.php";

?>
<div class="container my-5 py-3">


<?php
if(isset($_GET['orderid'])){
    $id=$_GET['orderid'];
       $sql="SELECT * FROM books WHERE id=$id";
       $result=mysqli_query($con,$sql);
    
       if($result){
        $row=mysqli_fetch_assoc($result);
            
            $name=$row['name'];
            $price=$row['price'];
            $images=$row['images'];
            $order="INSERT INTO orders (product,price,image,email) VALUES ('$name','$price','$images','$email')";
            $order_confirm=mysqli_query($con,$order);
            
           if($order_confirm){
            echo "<script> alert('Order placed Succesfull')</script>";
            header('location:perches.php');
           }else{
            header("location:order.php?orderid='$id'");
           }
           
       }
    }
?>


</div> 