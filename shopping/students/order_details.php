<?php
if(isset($_SESSION['name']) && isset($_SESSION['email'])){
    $name=$_SESSION['name'];
    $email=$_SESSION['email'];
    $pnum=$_SESSION['pnum'];
    $address=$_SESSION['address'];
  }
include '../../connect.php';
include "../nav.php";

?>
<div class="container my-5 py-3  ">

    <?php
       
       $sql="SELECT * FROM orders WHERE email='$email'";
       $result=mysqli_query($con,$sql);
    
       if(mysqli_num_rows($result)>0){
        ?>
        <table class="table table-bordered   justify-content-center">
    
    <h1>Selected item</h1>
  
  <thead>
      <tr>
      <th>Product_image</th>
      <th class="text-center">Product_name</th>
      <th>Price</th>
      <th>Activity</th>
      
      
      </tr>
  </thead>
        <?php
        while($row=mysqli_fetch_assoc($result)){
            $id=$row['id'];
            $name=$row['product'];
            $price=$row['price'];
            $images=$row['image'];
            
           
                        echo '
                          <tbody >
                  <tr >
                       <td style="width:50px"><img src="../.'.$images.'" alt="'.$name.' image" style="width:100px;height:80px;" ></th>
                       <td class="text-center">'.$name.'</td>
                       <td style="width:50px">$'.$price.'/-</td>
                       <td style="width:50px"><a href="order_cancel.php?cardid='.$id.'" class="btn btn-danger  w-45" >Cancel</a></td>
                       
                       
                  </tr>
                 
                  
                  ';
                  
            }
            ?>
          


</tbody>
</table>
<?php
        }else{
            echo'No record found';
        }
            
           
        
      
        
       ?>
       <?php include "../../hf/footer.php";?>
       