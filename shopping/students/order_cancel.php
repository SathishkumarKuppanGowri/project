<?php
include '../../connect.php';
if(isset($_GET['cardid'])){
    $id=$_GET['cardid'];
    
    $sql=" DELETE FROM orders WHERE id='$id'";
    $result=mysqli_query($con,$sql);
    
    if($result){
        echo'<script>alert("Order cancel successfully");window.location.href="order_details.php"</script>';
        exit();
    }else{
        echo'<script>alert("Order not canceled");window.location.href="order_details.php"</script>';
        exit();
    }

}
?>