<?php include "../hf/head.html"?>
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
  <a class="navbar-brand" href="homepage.php?home=active"><img src="../images/logo/logo-final.png" width="20" height="20" alt="logo"> UPSC <span>.</span></a>
  
</div>
</nav>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>