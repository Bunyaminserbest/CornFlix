<?php
  $title = 'Contact-us';
  include('header.php');
?>
<?php

  

    //condition pour rentré dans la ddb
  
    if(isset($message)){
      echo "<p class='text-warning'>".$message."<p>";
    }else{
      foreach ($result as $row) {

        
?>
   <div class="p-5">
     <p><?php ?></p>
    <h1><i class="fas fa-user-alt "></i> Profil of <?= $row['username'];?></h1>
    <hr>
    <ul>
        <img src="<?= $row["avatar"];?>" alt="Avatar">   
            
        <ul>
          <li>
            username : <?= $row['username'];?>
          </li>
          <li>
            name : <?= $row['name'];?>
          </li>
          <li>
            lastname : <?= $row['lastname'];?>
          </li>
          <li>
            email : <?= $row['email'];}}?>
          </li>
        </ul> 
        

        <form method="POST" action="" enctype="multipart/form-data">
          <label for="avatar"> Add avatar</label>
          <input type="file" name="avatar">
          <button type="submit" class="btn btn-primary">Submit</button><br><br>
        </form>  


    <p>
      <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
        New Mail
      </button>
    </p>
    <div class="collapse" id="collapseExample">
      <form action="" method="Post" class="">
          <label>New Mail</label>
          <input type="text" name="newMail" class="txtField" required>
          <label>Confirm Mail</label>
            <input type="text" name="confirmMail" class="txtField" required>
            <input type="submit" name="submit" value="Submit" class="btnSubmit">
      </form>
    </div>
    <p>
    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample">
      New Password
    </button>
  </p>
  <div class="collapse" id="collapseExample2">
  <form action="" method="Post"class="">
        <label>New Password</label>
        <input type="password" name="newPassword" class="txtField" required>
        <label>Confirm Password</label>
          <input type="password" name="confirmPassword" class="txtField" required>
          <input type="submit" name="submit" value="Submit" class="btnSubmit">
      </form>
  </div>   
  </div>

<?php
include('footer.php')
?>