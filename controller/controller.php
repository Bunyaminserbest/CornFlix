<?php
require('./model/model.php');
function login(){
    if(isset($_POST['login'])){
    $result = loginSql();
    foreach($result as $row){
        if(password_verify($_POST['password'],$row['password'])){
          $_SESSION['user_id']=$row['user_id'];
          $_SESSION['username']=$row['username'];
          header('location:./view/indexView.php');
        } else {
          $message = '<label> wrong password </label>';
          return $message;
        }
      }
  }
  require('./view/connexionView.php');
}