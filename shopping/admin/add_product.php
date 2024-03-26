<?php
session_start();
include "../../connect.php";
include "admin_nav.php";

?>
    <div class="container mt-3">
        <?php
        $error='';
        if(isset($_GET['error'])){
            $error=$_GET['error'];
        }
        ?>
    
  <h2>Add Product Details:</h2>
  <form calss="card" action="add_product.php" method="POST" enctype="multipart/form-data">
    <div class="mb-3 mt-3">
      <label for="name">Product Name:</label>
      <input name="name" type="name" class="form-control" id="name" placeholder="Enter name" >
    </div>
    <div class="mb-3">
      <label for="text">Price:</label>
      <input name="price" type="text" class="form-control" id="text" placeholder="Enter password" >
    </div>
    <div class="mb-3 mt-3">
      <label for="image">Image:</label>
      <input name="image" type="file" class="form-control" id="file" placeholder="UPLOAD IMAGE" accept=".jpg, .jpeg, .png"  >
    </div>
    
    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    <div>
        <p><?php echo $error?></p>
    </div>
    </form>
    <?php
    include "../../connect.php";
    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        
        $filename=$_FILES['image']['name'];
        $tmp_name=$_FILES['image']['tmp_name'];
        $filesize=$_FILES['image']['size'];
        $folder='images/'.$filename;
      
        $price=$_POST['price'];
        if(empty($name)  OR empty($filename) OR empty($price) ){
            header("location: add_product.php?error=All Fileds are Must Filled");
            exit();
        }
        if($filesize > 1048576){
          header("location:add_product.php?error=You can not upload this file only allow lessthan 1mb");
          exit();
        }else{
        
        $sql="INSERT INTO books (name,images,price) VALUES ('$name','$filename',$price)";
        $result=mysqli_query($con,$sql);
        if($result){
          move_uploaded_file($tmp_name,$folder);
            header("location: admin_product.php");
        }else{
            header("location: add_product.php?error=something error..!");
          
        }
    }

    }
    ?>
</div>
</body>
</html>