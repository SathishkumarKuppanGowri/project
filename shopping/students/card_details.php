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
       $total=0;
       $sql="SELECT * FROM card WHERE email='$email'";
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
      <th>Quantity</th>
      <th>Total_Amount</th>
      <th>Remove</th>
      
      </tr>
  </thead>
        <?php
        $grand_total=0;
        while($row=mysqli_fetch_assoc($result)){
          $id=$row['id'];
            $name=$row['name'];
            $price=$row['price'];
            $quantity=$row['quantity'];
            $images=$row['image'];
            $qnt= $quantity * $price ;
            $grand_total=$grand_total+$qnt;
            
           
                        echo '
                          <tbody >
                  <tr >
                       <td style="width:50px"><img src="../.'.$images.'" alt="'.$name.' image" style="width:100px;height:80px;" ></td>
                       <td class="text-center">'.$name.'</td>
                       <td style="width:50px">$'.$price.'/-</td>
                       <td style="width:50px">

                       <form action="quantity_update.php" method="post">
                       <input type="number" name="quantity"  style="width:50px" value='.$quantity.' >
                       <input type="hidden" name="id"  style="width:50px" value='.$id.'>
                       <input type="submit" name="update" value="update">
                       </form>
                       </td>
                       
                       <td style="width:50px">'.
                        $qnt.'</td>
                       <td> <a href="card_delete.php?id='.$id.'" class="btn btn-danger">Delete</a> </td>
                       
                  </tr> ';
                  
            }
            ?>
            
            <tr>
            <td colspan="3"><a href="perches.php" class="btn btn-success">Continue Shopping</a></td>
            <td>Total</td>
            <td> <?php
            echo $grand_total;
            ?></td>
            <td> <a href="" class="btn btn-success">Buy Product</a> </td>
            
      </tr> 


</tbody>
</table>
<script>
  function qntValid(this){
    var qnt = input.value
    
  }
</script>
<?php
        }else{
            echo'No record found';
        }
            
           
        
      
        
       ?>
       <?php include "../../hf/footer.php";?>
       