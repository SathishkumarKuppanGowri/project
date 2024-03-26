<?php 

include '../../connect.php';
include "../nav.php";

?>
<div class="container my-5 py-2">
  <center><h2>Profile</h2></center>
  <table class="table table-borderless">
    <thead>
      <tr>
        <th>Name:</th>
        <td><?php echo $name;?></td>
        
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Email</td>
        <td><?php echo $email;?></td>
        
      </tr>
      <tr>
        <td>contact No.</td>
        <td><?php echo $pnum;?></td>
        
      </tr>
      <tr>
        <td>Location</td>
        <td><?php echo $address;?></td>
        
    </tbody>
  </table>
            
</div>
<?php include "../../hf/footer.php";?>