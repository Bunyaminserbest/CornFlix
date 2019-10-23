
<?php 

session_start();

$message = '';
$title= 'login'; 
ob_start(); ?>
<form action="" method="POST">

<p><?=$message; ?></p>

  <label for="username"> Enter your user name</label>
    <input type="text" name="username">

  <label for="password"></label>
    <input type="password" name="password">

  <button type="submit" name="login">Send</button>

</form>
<?php $content = ob_get_clean(); 
  require('./template.php');?>

