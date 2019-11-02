
<?php 
$title= 'login'; 
include('header.php');


 ?>
<h1 class="text-center pt-3">Sign-in</h1>

<!-- FORMULAIRE DE LOGIN -->

<form action="" method="POST" class="d-flex flex-column align-items-center pt-3">
  
  <div class="form-group "  >
    <label for="username">Enter your username</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username" name="username">
  </div>
  <div class="form-group ">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
  </div>
  <p class="text-danger"><?php if(isset($message)){
        echo $message;}?></p>
  <button type="submit" class="btn   submitBtn" name="login">Submit</button>
</form>
<?php  
  include('footer.php');?>

