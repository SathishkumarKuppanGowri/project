<?php
        
        include "../../connect.php";
        include "admin_nav.php";
        if(isset($_GET['updateid'])){
            $id=$_GET['updateid'];
            $sql="SELECT * FROM books WHERE id='$id'";
            
            $result=mysqli_query($con,$sql);
                $row=mysqli_fetch_assoc($result);
                $id=$row['id'];
                $name=$row['name'];
                $price=$row['price'];
              
                
        
        }
        
            ?>
 <div class="container d-flex justify-content-center my-4 py-5">
    
<form class=" w-50 " method="post" enctype="multipart/form-data">
     <h3 class="text-center text-primary">Update product</h3>
     <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Name</label>
        <input name="name" type="text" class="form-control" id="exampleInputPassword1" autocomplete="on" autocomplete="on" placeholder="Enter your Name" value="<?php echo $name ;?>">
      </div>
     <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Price</label>
        <input name="price" type="text" class="form-control" id="exampleInputPassword1" autocomplete="on" autocomplete="on" placeholder="Enter your Name" value="<?php echo $price ;?>">
      </div>
     <!-- <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">image</label>
        <input name="image" type="file" class="form-control" id="exampleInputPassword1" autocomplete="on" autocomplete="on" placeholder="Enter your Name" >
      </div> -->
      
      
      <button name="submit" type="submit" class="btn btn-primary">Update</button>
      
      <?php
      if(isset($_POST['submit'])){
        $uname=$_POST['name'];
        $uprice=$_POST['price'];
        // $image_file=$_FILES['image']['tmp_name'];
        // $image_name=$_FILES['image']['name'];
        // move_uploaded_file($image_file ,"../..images/". $image_name);
        $sql="UPDATE books SET name='$uname',price='$uprice' where id='$id'";
        
        $result=mysqli_query($con,$sql);
        if($result){
            header("location: admin_product.php");
        }else{
          mysqli_error($result);
        }
      }
      ?>
     
    </form>
    </div>