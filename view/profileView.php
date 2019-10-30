<?php
  $title = 'Contact-us';
  include('header.php');
?>
<?php
  function image(){
    if(isset($_FILES["avatar"])){
      $extensionValides = array('jpg','jpeg','png','svg');
      $target_dir = "avatar/";
      $target_file = $target_dir . basename($_FILES["avatar"]["name"]);
      $uploadOk = 1;
      $FileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["avatar"]["tmp_name"]);
          if($check !== false) {
            echo "OK file" . $check["mime"] . ".";
          $uploadOk = 1;
          } else {
            echo "this file is not image";
          $uploadOk = 0;
      }
  }
  // Check if file already exists
  if (file_exists($target_file)) {
      echo "Existing file.";
      $uploadOk = 0;
  }
  // Check file size
  if ($_FILES["avatar"]["size"] > 5000000) {
      echo "heavy file";
      $uploadOk = 0;
  }
  // Allow certain file formats
  if($FileType != "jpg" && $FileType != "png" && $FileType != "jpeg"
  && $FileType != "gif") {
      echo "Correct file only.";
      $uploadOk = 0;
  }
  // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
      echo "Oops it did not work.";
  // if everything is ok, try to upload file
    } else {
      if (move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file)) {
          $array = explode('.', $_FILES['avatar']['name']);
          $fileName = $array[0];
            return $target_file;
      } else {
          echo "Sorry, there was an error uploading your file.";
      }
    }
    }
    }

    //condition pour rentré dans la ddb
  if(isset($_FILES['avatar'])){
  $target_file = image();
  $db = connect_db();
  $data=[':avatar'=> $target_file,':id' => $_GET['id']];
    
  $query="UPDATE login SET avatar=:avatar WHERE user_id = :id";
  $statement = $db->prepare($query);
  $result = $statement->execute($data);
   
    return $result;
    }

    if(isset($_GET['id']))
    {
      $bdd= connect_db();
      $getId = $_GET['id'];
      $sql= "SELECT * FROM login WHERE user_id = $getId";
      foreach ($bdd->query($sql) as $row) {
        
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
            email : <?= $row['email'];}}?>
          </li>
        </ul>
        <?=image();?>
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