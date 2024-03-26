<?php
session_start();
include "../../connect.php";
include "admin_nav.php";

?>

<div class="container ">
<h2 class="ms-auto">Product Control</h2>
<!-- <div class="btn btn-primary"> <a href="add_product.php" class="text-white">Add Product</a> </div> -->

<table class="table">
    <thead>
    <tr class="">
        <th>Id</th>
        <th>Name</th>
        <th>Price</th>
        <th>image</th>
        
        <th>Edit</th>
    </tr>
    </thead>
    <tbody>
        <?php
        
       
        $sql="SELECT * FROM books";
        $result=mysqli_query($con,$sql);
        if($result){
            while($row=mysqli_fetch_assoc($result)){
                $id=$row['id'];
                $name=$row['name'];
                $price=$row['price'];
                $images=$row['images'];
                
                echo '<tr >
                <td>'.$id.'</td>
                <td>'.$name.'</td>
                <td>'.$price.'</td>
                <td><img src="../.'.$images.'" alt="'.$name.' image" style="width:50px;height:60px;"></td>
             
                <td>
                <a class= "btn btn-primary"href="updateproduct.php?updateid='.$id.'">Update</a>
                <a class= "btn btn-danger"href="deleteproduct.php?deleteid='.$id.'">Delete</a>
                </td>
            </tr>';
            }
        }
        
        
        
        ?>


    </tbody>
</table>



</div>