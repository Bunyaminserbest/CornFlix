<?php
require('./model/model.php');
function login()
{
  if (isset($_POST['login'])) {

    $message = loginSql();
    //verifie que $result est bien un tableau si oui parcours et enregistre la session
    if (is_array($message)) {
      foreach ($message as $row) {

        // verifie le mot de passe et sauvegarde les infos de sessions
        if (password_verify($_POST['password'], $row['password'])) {
          $_SESSION['user_id'] = $row['user_id'];
          $_SESSION['rank'] = $row['rank'];
          $_SESSION['username'] = $row['username'];
          header('location:./index.php?action=home');
        } else {

          $message = 'wrong password';


          require_once('./view/connexionView.php');
        }
      }
    } else {
      $message;
      require_once('./view/connexionView.php');
    }
  }
  require_once('./view/connexionView.php');
}
function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
function subscribe()
{
  if (isset($_POST['name'])) {
    $data = [
      ':name' => test_input($_POST['name']),
      ':lastname' => test_input($_POST['lastname']),
      ':email' => test_input($_POST['email']),
      ':username' => test_input($_POST['username']),
      ':password' => test_input(password_hash($_POST['password'], PASSWORD_DEFAULT)),
    ];
    if ($_POST['password'] == $_POST['Confirmpassword']) {
      $statement = subscribeSql($data);
      header('location:./index.php?action=login');
    } else {
      $message = '<p class="text-danger">password not match</p>';
      // require('./view/subscribeView.php');
    }
  }
  require('./view/subscribeView.php');
}
function contact()
{
  if (isset($_POST['username'])) {
    $data = [
      ':username' => test_input($_POST['username']),
      ':email' => test_input($_POST['email']),
      ':subject' => $_POST['subject'],
      ':message' => $_POST['message'],
    ];
    $statement = contactSql($data);
    //header('location:./index.php?action=Contact-us');
    $message = 'votre message à bien été envoyé';
  }
  require('./view/contactView.php');
}

//CHECKING COMMENTS ID
function comments()
{
  if (isset($_GET['id']) && $_GET['id'] > 0) {
    $comments = getComments($_GET['id']);
  } else {
    echo 'Erreur : aucun identifiant de billet envoyé';
  }
  require('./view/playerView.php');
}



function addComment($id_movie, $username, $comment)
{
  $affectedLines = postComment($id_movie, $username, $comment);

  if ($affectedLines === false) {
    die('Cannot add comment');
  } else {
    header('Location: ./index.php?action=player&id=' . $id_movie);
  }
}
function commentsSerie()
{
  if (isset($_GET['id']) && $_GET['id'] > 0) {
    $comments = getCommentsSerie($_GET['id']);
  } else {
    echo 'Erreur : aucun identifiant de billet envoyé';
  }
  require('./view/playerSeriesView.php');
}



function addCommentSerie($id_serie, $username, $comment)
{
  $affectedLines = postCommentSerie($id_serie, $username, $comment);

  if ($affectedLines === false) {
    die('Cannot add comment');
  } else {
    header('Location: ./index.php?action=playerSeries&id=' . $id_serie);
  }
}
function image()
{
  $target_dir = "avatar/";
  $target_file = $target_dir . basename($_FILES["avatar"]["name"]);
  $uploadOk = 1;
  $FileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
  if (isset($_POST["submit"])) {
    $check = getimagesize($_FILES["avatar"]["tmp_name"]);
    if ($check !== false) {
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
  if (
    $FileType != "jpg" && $FileType != "png" && $FileType != "jpeg"
    && $FileType != "gif"
  ) {
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


function profile()
{
  if ($_SESSION['user_id'] == $_GET['id']) {
    if (isset($_FILES['avatar'])) {

      $target_file = image();

      $data = [':avatar' => $target_file, ':id' => $_GET['id']];

      $statement = addAvatar($data);
    }
    if (isset($_GET['id'])) {
      $result = userData();
    }
    if (isset($_POST['newMail'])) {
      $data = [
        ':newMail' => test_input($_POST['newMail']),
        ':id' => $_GET['id']
      ];
      $statement = changeMail($data);
    }
    if (isset($_POST['newPassword'])){
      $data=[
        ':newPassword' => test_input(password_hash($_POST['newPassword'], PASSWORD_DEFAULT)),
        ':id' => $_GET['id']
      ];
     
      $statement = changePassword($data);
    }
    
  } else {
    $message = "Accès refusé !!!";
  }
  require('./view/profileView.php');
}
