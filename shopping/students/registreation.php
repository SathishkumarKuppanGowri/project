
<?php
        include '../../connect.php';
        $NameErr=$emailErr=$passwordErr=$phoneErr=$addressErr='';
        
        if($_SERVER['REQUEST_METHOD']=="POST"){
          if(empty($_POST['name'])){
            $NameErr="This field is Required";
          }else{
            $pattern="/^[a-zA-Z]+$/";
            $check=preg_match_all($pattern,$_POST['name']);
            if(!$check){
              $NameErr="Please Enter the Correct Pattern";
            }
          }
          if(empty($_POST['email'])){
            $emailErr="This field is Required";
          }else{
            
            $check=filter_var($_POST['email'],FILTER_VALIDATE_EMAIL);
            if(!$check){
              $emailErr="Please Enter the Correct Pattern";
            }
          }
          if(empty($_POST['pw'])){
            $passwordErr="This field is Required";
          }else{
            $pattern="/^[A-Za-z0-9]/";
            $check=preg_match_all($pattern,$_POST['name']);
            if(!$check){
              $passwordErr="Please Enter the Correct Pattern";
            }
          }
          if(empty($_POST['pnum'])){
            $phoneErr="This field is Required";
          }else{
            $pattern="/^[6-9]{1}[0-9]{9}/";
            $check=preg_match_all($pattern,$_POST['pnum']);
            if(!$check){
              $phoneErr="Please Enter the Correct Pattern";
            }
          }
          if(empty($_POST['address'])){
            $addressErr="This field is Required";
          }
          if(isset($_POST["submit"])){
            $name=$_POST['name'];
            $email=$_POST['email'];
            $pw=$_POST['pw'];
            $pnum=$_POST['pnum'];
            $address=$_POST['address'];
            
            $sql="INSERT INTO `students`(`name`, `email`, `password`, `pnum`, `address`) VALUES ('$name','$email','$pw','$pnum','$address')";
            $result=mysqli_query($con,$sql);
            if($result){
              
              echo '<script> window.alert("sinup success") </script>';
            }else{
              die(mysqli_error($result));
            }
          }

        }

          
      
        
    
    ?>



<div class="container d-flex justify-content-center my-4 py-5">
   <form class=" w-50 " method="post">
     <h3 class="text-center text-primary">SingUp</h3>
     <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Name</label>
        <input name="name" type="text" class="form-control" id="exampleInputPassword1" autocomplete="on" autocomplete="on" placeholder="Enter your Name">
        <label for="error-msg" class="red-message form-message"><?php echo $NameErr;?></label>
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" autocomplete="on" placeholder="Enter your Email">
        <label for="error-msg" class="red-message"><?php echo $emailErr;?></label>
        
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input name="pw" type="password" class="form-control" id="exampleInputPassword1" autocomplete="on" placeholder="Enter your Password">
        <label for="error-msg" class="red-message"><?php echo $passwordErr;?></label>
      </div>
     
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Phone Number</label>
        <input name="pnum" type="tel" class="form-control" id="exampleInputPassword1" max-lenth="10" autocomplete="on" placeholder="Enter your Phone Number">
        <label for="error-msg" class="red-message"><?php echo $phoneErr;?></label>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Address</label>
        <input name="address" type="text" class="form-control" id="exampleInputPassword1" autocomplete="on" placeholder="Enter your Address">
        <label for="error-msg" class="red-message"><?php echo $phoneErr;?></label>
      </div>
      
        
        <p class="form-text text-center">You hava a Account <a class="form-link" href="shopping.php">LogIn</a></p>
      
      <button name="submit" type="submit" class="btn btn-primary">SingUp</button>
      
    </form>
    
</div>