<?php
include '../../connect.php';
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $sql="DELETE FROM card WHERE id='$id'";
    $result=mysqli_query($con,$sql);
    if($result){
      echo ' <script>alert("Product removed");window.location.href="card_details.php"</script>';
    }
}
?>