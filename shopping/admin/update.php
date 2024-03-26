
<?php
 include "../../connect.php";
include "admin_nav.php";
?>
<div class="container d-flex justify-content-center my-4 py-5">
<?php
       
      
       
       $id=$_GET['updateid'];
       $sql="SELECT * FROM students WHERE id=$id";
       
       $result=mysqli_query($con,$sql);
       
       $row=mysqli_fetch_assoc($result);
       
       $name=$row['name'];
       $email=$row['email'];
       $password=$row['password'];
       $phone=$row['pnum'];
       $address=$row['address'];

       if(isset($_POST["submit"])){
         $name=$_POST['name'];
         $email=$_POST['email'];
         $pw=$_POST['pw'];
         $cpw=$_POST['cpw'];
         $pnum=$_POST['pnum'];
         $address=$_POST['address'];
         
         $sql="update `students` set name='$name',email='$email',password='$pw',pnum='$pnum',address='$address' where id=$id";
         $result=mysqli_query($con,$sql);
         if($result){
          echo '<script>alert("update success");window.location.href="admindashborad.php"</script>';
          exit();
        
        
         }else{
          echo 'data not update';
          exit();
         }
       }
     
       
   
   ?>
<form class=" w-50 " method="post">
     <h3 class="text-center text-primary">Update Form</h3>
     <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Name</label>
        <input name="name" type="text" class="form-control" id="exampleInputPassword1" autocomplete="on" autocomplete="on" placeholder="Enter your Name" value=<?php echo $name ;?>>
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" autocomplete="on" placeholder="Enter your Email" value=<?php echo $email ;?>>
        
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input name="pw" type="password" class="form-control" id="exampleInputPassword1" autocomplete="on" placeholder="Enter your Password" value=<?php echo $password ;?>>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Confrim Password</label>
        <input name="cpw" type="password" class="form-control" id="exampleInputPassword1" autocomplete="on" placeholder="ReEnter your Password">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Phone Number</label>
        <input name="pnum" type="tel" class="form-control" id="exampleInputPassword1" autocomplete="on" placeholder="Enter your Phone Number" value=<?php echo $phone ;?>>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Address</label>
        <input name="address" type="text" class="form-control" id="exampleInputPassword1" autocomplete="on" placeholder="Enter your Address" value=<?php echo $address ;?>>
      </div>
      
        
     
      
      <button name="submit" type="submit" class="btn btn-primary">Update</button>
     
    </form>
    </div>