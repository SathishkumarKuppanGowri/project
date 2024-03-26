<?php include '../shopnev.php';
$semail=$spassword=$serror=$aerror=$aemail=$apassword='';
if(isset($_GET['serror'])){
$serror=$_GET['serror'];
}
if(isset($_GET['aerror'])){
  $aerror=$_GET['aerror'];
  }
?>



<body>
<div class="container  pt-2 mt-2">
<div class="row justify-content-center m-5">
              <div class="card  m-1 p-3 col-md-5  ">
                <form calss="form-group" action="../shopping/students/student.php" method="post">
                    <h3 class="text-center text-primary ">Aspirent LogIn</h3>
                  <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Email address</label>
                      <div class="d-flex">
                      <input name="student_email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                      <label for="error-msg" class="text-danger">*</label>
                      </div>
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <div class="d-flex">
                        <input name="student_password" type="password" class="form-control" id="exampleInputPassword1">
                        <label for="error-msg" class="text-danger">*</label>
                    </div>
                  </div>
                  <div class="mb-3 form-check">
                  
                  <p class="form-text">You don't hava a Account <a class="form-link" href="../shopping/students/registreation.php">SingUp</a></p>
                  
                  </div>
                  <button name="student_submit" type="submit" class="btn btn-primary">LogIn</button>
                  <?php echo $serror?>
                </form>
              </div>
  <!-- admin login -->
              <div class="card   m-1 p-3 col-md-5  ">
              <form calss="form-group" action="../shopping/admin/admin.php" method="post">
              <h3 class="text-center text-primary">Admin LogIn</h3>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <div class="d-flex">
                <input name="admin_email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <label for="error-msg" class="text-danger">* 
                </div>
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <div class="d-flex">
                <input name="admin_password" type="password" class="form-control" id="exampleInputPassword1">
                <label for="error-msg" class="text-danger">* 
                </div>
              </div>
              <div class="mb-3 form-check">
                
                <p class="form-text">You don't hava a Account <a class="form-link" href="registreation.php">SingUp</a></p>
              </div>
              <button name="admin_submit" type="submit" class="btn btn-primary">LogIn</button>
              <?php echo $aerror?>
              </form>
              </div>
              </div>
  </div>
  <?php include '../hf/footer.php';?>
  

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

