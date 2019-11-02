<?php
$title = 'Profile';
include('header.php');
?>
<?php
//condition pour rentré dans la ddb
if (isset($message)) {
  echo "<p class='text-warning'>" . $message . "<p>";
} else {
  foreach ($result as $row) {
    ?>
    <section class="text-center p-5">
      <p><?php ?></p>
      <h1><i class="fas fa-user-alt "></i> Profil of <?= $row['username']; ?></h1>
      <hr>
      <img src="<?php if ($row['avatar'] != "") {
                      echo $row["avatar"];
                    } else {
                      echo "./avatar/defaultAvatar.png";
                    } ?>" alt="avatar profile" class="rounded-circle">

      <ul style="list-style-type: none">
        <li class="profile">
          username : <?= $row['username']; ?>
        </li>
        <li class="profile">
          name : <?= $row['name']; ?>
        </li>
        <li class="profile">
          lastname : <?= $row['lastname']; ?>
        </li>
        <li class="profile">
          email : <?= $row['email'];
                    }
                  } ?>
        </li>
      </ul>
      <section class="container">
        <section class="row ">
      <section class="addAvatar avatar col-md-6 ">
        <form method="POST" action="" enctype="multipart/form-data">
          <div class="input-group mb-3">
            <div class="custom-file">
              <label for="avatar" class=" custom-file-label profileBtn text-white text-left avatar col-md-6 mx-auto my-3"> Change profile picture</label>
              <input type="file" class="custom-file-input col-md-6 text-center avatar mx-auto my-3 profileBtn" name="avatar">
              </div>
          </div>
              <button type="submit" class="btn profileBtn my-3">Submit</button><br><br>
           
        </form>
        </section>
      <section class="col-md-6 ">
        <button class="btn profileBtn my-3" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
          Change e-mail
        </button>
      
      <section class="collapse" id="collapseExample">
        <form action="" method="Post" class="">
          <label>New e-mail</label>
          <input type="text" name="newMail" class="txtField" required>
          <label>Confirm e-mail</label>
          <input type="text" name="confirmMail" class="txtField" required>
          <input type="submit" name="submit" value="Submit" class=" btn btn-sm submitBtn mx-2">
        </form>
      </section>
      <p>
        <button class="btn profileBtn" type="button" data-toggle="collapse" data-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample">
          Change Password
        </button>
      </p>
      <section class="collapse" id="collapseExample2">
        <form action="" method="Post" class="">
          <label>New Password</label>
          <input type="password" name="newPassword" class="txtField" required>
          <label>Confirm Password</label>
          <input type="password" name="confirmPassword" class="txtField mx-2" required>
          <input type="submit" name="submit" value="Submit" class="btn btn-sm submitBtn">
        </form>
        </section>
      </section>
    </section>
    </section>
    </section>
    <?php
    include('footer.php')
    ?>