<?php include "../connect.php";?>
<?php include "../hf/hf.php";?>
<div class="container  my-5 py-3">
   
    <div class="row m-1">
      <?php
      $sql="SELECT * FROM books";
      $result=mysqli_query($con,$sql);
      if($result){
      
        while($row=mysqli_fetch_assoc($result)){
          $name=$row['name'];
          $link=$row['link'];
          $image=$row['images'];
                    echo'<div class="col-sm-6 col-md-3 ">
                    <div class="card my-1"><img src=".'. $image .'" alt="'.$name.' Book image" class="card-img "></div>
                      <div >
                        <a href='.$link.' download class="btn"><i class="fa fa-download  p-1" aria-hidden="true"></i>Download</a>
                        <span class="badge bg-success"><i class="fa fa-arrow-circle-left p-1" aria-hidden="true"></i>E-book</span>
                      </div>
                  </div>';
        }
       
      }else{
        
        echo "did't connect";
      }
      
      ?>
      
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>