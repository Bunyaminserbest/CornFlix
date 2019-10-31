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
  <section class=" border rounded-top text-center p-5">
    <p><?php ?></p>
    <h1><i class="fas fa-user-alt "></i> Profil of <?= $row['username'];?></h1>
    <hr>
    <img src="<?php if($row['avatar']!= ""){ echo $row["avatar"];}else{echo "./avatar/defaultAvatar.png";}?>" alt="avatar profile" class="rounded-circle">
     
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
        <input type="file" class= name="avatar">
        <button type="submit" class="btn btn-danger">Submit</button><br><br>
    </form>  
    <p>
      <button class="btn btn-danger" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
        New Mail
      </button>
    </p>
    <section class="collapse" id="collapseExample">
      <form action="" method="Post" class="">
        <label>New Mail</label>
        <input type="text" name="newMail" class="txtField" required>
        <label>Confirm Mail</label>
        <input type="text" name="confirmMail" class="txtField" required>
        <input type="submit" name="submit" value="Submit" class="btnSubmit">
      </form>
    </section>
    <p>
      <button class="btn btn-danger" type="button" data-toggle="collapse" data-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample">
        New Password
      </button>
    </p>
    <section class="collapse" id="collapseExample2">
      <form action="" method="Post"class="">
        <label>New Password</label>
        <input type="password" name="newPassword" class="txtField" required>
        <label>Confirm Password</label>
        <input type="password" name="confirmPassword" class="txtField" required>
        <input type="submit" name="submit" value="Submit" class="btnSubmit">
      </form>
    </section>   
  </section>
<?php
include('footer.php')
?>