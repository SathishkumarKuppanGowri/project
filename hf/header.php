<nav class="navbar fixed-top  navbar-expand-lg bg-dark navbar-dark">
<div class="container">
<?php
$home=$prilims=$mains=$optional=$interview=$service=$ebook=$shopping='';
if(isset($_GET['home'])){
  $home=$_GET['home'];
}if(isset($_GET['prilims'])){
  $prilims=$_GET['prilims'];
  
} if(isset($_GET['mains'])){
  $mains=$_GET['mains'];
    
} if(isset($_GET['optional'])){
  $optional=$_GET['optional'];
    
} if(isset($_GET['interview'])){
  $interview=$_GET['interview'];
    
} if(isset($_GET['service'])){
  $service=$_GET['service'];
    
} if(isset($_GET['ebook'])){
  $ebook=$_GET['ebook'];
    
} if(isset($_GET['shopping'])){
  $shopping=$_GET['shopping'];
    
}
?>
  <a class="navbar-brand" href="../pages/index.php?home=active"><img src="../images/logo/logo-final.png" width="20" height="20" alt="logo"> UPSC <span>.</span></a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link <?php echo $home;?>"  aria-current="header.php"  href="../pages/homepage.php?home=active">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php echo $prilims;?>"   href="../pages/prilims.php?prilims=active" >Prelims</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php echo $mains;?>"  href="../pages/mains.php?mains=active" >Mains</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php echo $optional;?>"  href="../pages/optional.php?optional=active" >Optional</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php echo $interview;?>"  href="../pages/interview?interview=active" >Interview</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php echo $service;?>"   href="../pages/services.php?service=active" >Servises</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php echo $ebook;?>" href="../pages/ebook.php?ebook=active" ><i class="fa-light fa-book">E-book</i></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php echo $shopping;?>"  href="../pages/shopping.php?shopping=active" ><i class="fa fa-cart-shopping">Shopping</i></a>
      </li>
    </ul>
  </div>
</div>
</nav>