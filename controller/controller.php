<?php
require('./model/model.php');
function login(){
    if(isset($_POST['login'])){
        
    $message = loginSql();
    //verifie que $result est bien un tableau si oui parcours et enregistre la session
    if(is_array($message)){
    foreach($message as $row){
        
        // verifie le mot de passe et sauvegarde les infos de sessions
        if(password_verify($_POST['password'],$row['password'])){
           $_SESSION['user_id']=$row['user_id'];
           $_SESSION['rank']= $row['rank'];
          $_SESSION['username']=$row['username'];
         header('location:./index.php?action=home');
        } else {
        
          $message = 'wrong password';
          
          
          require_once('./view/connexionView.php');
        }
      }
    }else{
         $message;
         require_once('./view/connexionView.php');    
     }
  }
  require_once('./view/connexionView.php');
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
function subscribe(){
  if(isset($_POST['name'])){
    $data = [
      ':name' => test_input($_POST['name']),
      ':lastname' => test_input($_POST['lastname']),
      ':email' => test_input($_POST['email']),
      ':username' => test_input($_POST['username']),
      ':password' => test_input(password_hash($_POST['password'], PASSWORD_DEFAULT)),
    ];
    if($_POST['password'] == $_POST['Confirmpassword']){
    $statement = subscribeSql($data);
    header('location:./index.php?action=login');
  }else{
    $message = '<p class="text-danger">password not match</p>';
   // require('./view/subscribeView.php');
  }
  }
  require('./view/subscribeView.php');
}

  if(isset($_POST['username'])){
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

 function comments(){
  if (isset($_GET['id']) && $_GET['id'] > 0) {
    $comments = getComments($_GET['id']);
    //var_dump($comments);
    
}
else {
    echo 'Erreur : aucun identifiant de billet envoyé';
}
require('./view/playerView.php');
 }


?>