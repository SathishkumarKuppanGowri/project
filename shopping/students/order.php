<?php
       include '../../connect.php';
       include "../nav.php";
       
   ?>
<div class="container my-5 py-3 ">
<table class="table table-bordered  d-flex justify-content-center">
  <h1>Selected item</h1>

    <tbody >
    <?php
       $id=$_GET['orderid'];
       $sql="SELECT * FROM books WHERE id=$id";
       $result=mysqli_query($con,$sql);
    
       if($result){
        $row=mysqli_fetch_assoc($result);
            $id=$row['id'];
            $name=$row['name'];
            $price=$row['price'];
            $images=$row['images'];
            
            echo '
                  <tr >
                       <th style="width:100px;height:100px;" class="border" colspan="2"><img src="../.'.$images.'" alt="'.$name.' image" ></th>
                  </tr>
                  <tr>
                  <td>Product Name:</td>
                  <td>'.$name.'</td>
                  
                  </tr>
                  <tr>
                  <td>Product Price:</td>
                  <td  >$'.$price.'/-</td>
                  
                  </tr>
                  <tr>
                  <td></td>
                  <td> 
                  
                  <a class= "btn btn-success"href="buy.php?orderid='.$id.'">order</a>
                       
                       </td>
                  
                  </tr>
                  
       
        ';
        }
      
        
       ?>
       


    </tbody>
</table>

</div>
<?php include "../../hf/footer.php";?>