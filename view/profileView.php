<?php
  $title = 'Contact-us';
  include('header.php');
?>
<?php
  

    //condition pour rentré dans la ddb
  

   
      foreach ($result as $row) {
        
?>
   <div class="p-5">
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
            email : <?= $row['email'];}?>
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
      <div class="card card-body">
          <label>New Mail</label>
          <input type="text" name="newMail" class="txtField"/><span id="newMail" class="required"></span>
          <label>Confirm Mail</label>
            <input type="text" name="confirmMail" class="txtField"/><span id="confirmMail" class="required"></span>
            <input type="submit" name="submit" value="Submit" class="btnSubmit">
      </div>
    </div>
    <p>
    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample">
      New Password
    </button>
  </p>
  <div class="collapse" id="collapseExample2">
    <div class="card card-body2">
        <label>New Password</label>
        <input type="text" name="newMail" class="txtField"/><span id="newMail" class="required"></span>
        <label>Confirm Password</label>
          <input type="text" name="confirmPassword" class="txtField"/><span id="confirmPassword" class="required"></span>
          <input type="submit" name="submit" value="Submit" class="btnSubmit">
    </div>
  </div>   
  </div>

<?php
include('footer.php')
?>