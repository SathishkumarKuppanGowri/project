
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aspirents.com</title>
</head>
<body>
  
<?php include "../../connect.php";

include "../nav.php";
?>
<div class="container  my-5 ">
<center> <h1>Welcome <i><?php echo $name;?></i></h1></center>
    <div class="row m-1">
      <?php
      $sql="SELECT * FROM books";
      $result=mysqli_query($con,$sql);
      if($result){
      
        while($row=mysqli_fetch_assoc($result)){
          $id=$row['id'];
          $name=$row['name'];
          $price=$row['price'];
          $image=$row['images'];
                    echo'<div class="col-sm-6 col-md-3 mr-1 mb-1">
                              <div class="card my-1 w-100"><img src="../.'. $image .'" alt="'.$name.' Book image" class="card-img-top h-50">
                            <div class="card-body" >
                             <h1 class=" d-flex justify-content-center"> &#8377 '.$price.'</h1>
                            </div>
                             <div class="card-footer "> 
                            <a href="order.php?orderid='.$id.'" class="btn btn-success w-50 ">Buy</a>
                            <a href="card.php?cardid='.$id.'" class="btn btn-warning  w-45" >Card</a>
                            </div>
                            </div>
                          </div>';
        }
       
      }else{
        
        echo "did't connect";
      }
      
      ?>
      <?php include "../../hf/footer.php";?>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
