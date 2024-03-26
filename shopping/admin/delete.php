<?php
 include "../../connect.php";
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    $sql="delete from students where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        // echo 'Deleted success';
        header('location:admindashborad.php');
    }else{
        die(mysqli_error($result));
    }
}

?>