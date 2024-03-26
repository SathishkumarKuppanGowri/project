<?php include "../connect.php";?>
<?php include "../hf/hf.php";?>


   
    
    <div class="container  p-5 m-4  ">
      <div class="row">
      <?php
         $sql="SELECT * FROM optional";
         $result=mysqli_query($con,$sql);
         if($result){
            

            
            while($row=mysqli_fetch_assoc($result)){
            $name=$row['name'];
            $image=$row['image'];
            echo '<div class="card col-md-4 col-lg-3 p-0   " >
            <img src=.'.$image.'  style="height=200px; object-fit:containe" alt="'.$name.' Image"  class="card-img m-0 h-100" >
            <div class="card-body">'.$name.' </div>
            </div>';
            }
         }else{
            die(). mysqli_connect_error($result);
         }

      ?>
</div>   
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
            





