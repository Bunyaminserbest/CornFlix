<?php
$title = 'Contact-us';
include('header.php')
?>


<div class="container p-5">

<h1>Conctact-us</h1>

<!-- FORMULAIRE DE LOGIN -->

<form action="" method="POST" class="">
  
  <div class="form-group "  >
    <label for="Username">Username</label>
    <input type="text" class="form-control"  name="username">
  </div>

  <div class="form-group "  >
    <label for="email">E-mail</label>
    <input type="text" class="form-control" name="email">
  </div>

  <div class="form-group "  >
    <label for="subject">Subject</label>
    <input type="text" class="form-control"  name="subject">
  </div>

  <div class="form-group "  >
    <label for="Message">Message</label>
    <input type="textarea" class="form-control hgtTxtArea"  name="message">
  </div>

  <button type="submit" class="btn   submitBtn" name="login">Submit</button>
</form>
</div>
<?php
include('footer.php')
?>
