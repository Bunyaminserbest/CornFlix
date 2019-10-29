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
          echo "fichier OK" . $check["mime"] . ".";
          $uploadOk = 1;
      } else {
          echo "ce fichier n'est pas une image";
          $uploadOk = 0;
      }
  }
  // Check if file already exists
  if (file_exists($target_file)) {
      echo "Fichier existant.";
      $uploadOk = 0;
  }
  // Check file size
  if ($_FILES["avatar"]["size"] > 5000000) {
      echo "Y a des limites quand même.";
      $uploadOk = 0;
  }
  // Allow certain file formats
  if($FileType != "jpg" && $FileType != "png" && $FileType != "jpeg"
  && $FileType != "gif") {
      echo "Fichier correcte uniquement.";
      $uploadOk = 0;
  }
  // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
      echo "Oups ca n'a pas marché.";
  // if everything is ok, try to upload file
    } else {
      if (move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file)) {
          $array = explode('.', $_FILES['avatar']['name']);
          $fileName = $array[0];
            
      } else {
          echo "Sorry, there was an error uploading your file.";
      }
    }
    }
    }
?>
<?php
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
        <img src="<?= $row["avatar"];?>" alt="avatar">        
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
          <button type="submit">Submit</button><br><br>
        </form>  
          <button class="my-2 my-sm-0 searchBtn" type="mail">Change mail adress</button>
          <button class="my-2 my-sm-0 searchBtn" type="password">Change password</button>
  </div> 

<?php
include('footer.php')
?>