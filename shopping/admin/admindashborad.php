<?php
session_start();
include "../../connect.php";
include "admin_nav.php";
?>
<div class="container ">
<h2 class="ms-auto">User's Control</h2>
<!-- <a href="add_product.php" class="btn btn-primary">Add user</a>  -->

<table class="table">
    <thead>
    <tr class="">
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Phone Number</th>
        <th>Address</th>
        <th>Edit</th>
    </tr>
    </thead>
    <tbody>
        <?php
        
       
        $sql="SELECT * FROM students";
        $result=mysqli_query($con,$sql);
        if($result){
            while($row=mysqli_fetch_assoc($result)){
                $id=$row['id'];
                $name=$row['name'];
                $email=$row['email'];
                $password=$row['password'];
                $Phonenumber=$row['pnum'];
                $address=$row['address'];
                echo '<tr >
                <td>'.$id.'</td>
                <td>'.$name.'</td>
                <td>'.$email.'</td>
                <td>'.$password.'</td>
                <td>'.$Phonenumber.'</td>
                <td>'.$address.'</td>
                <td>
                <a class= "btn btn-primary"href="update.php?updateid='.$id.'">Update</a>
                <a class= "btn btn-danger"href="delete.php?deleteid='.$id.'">Delete</a>
                </td>
            </tr>';
            }
        }
        
        
        
        ?>


    </tbody>
</table>



</div>