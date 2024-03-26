<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-dark ">
<div class="container-fluid ">
<a class="navbar-brand text-white" href="../../homepage.php?home=active"><img src="../../images/logo/logo-final.png" width="20" height="20" alt="logo"> UPSC <span>.</span></a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav text-light">
      <li class="nav-item">
        <a class="nav-link text-light" href="admindashborad.php">User Details</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="admin_product.php">Product Details</a>
      </li>
      
    </ul>
    <form class="d-flex ms-auto" action="admin_logout.php">
      
      <button class="btn btn-outline-light" type="submit">Logout</button>
    </form>
  </div>
</div>
</nav>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
