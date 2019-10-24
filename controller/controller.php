<?php
require('./model/model.php');
function login(){
    if(isset($_POST['login'])){
        
    $result = loginSql();
    //verifie que $result est bien un tableau si oui parcours et enregistre la session
    if(is_array($result)){
    foreach($result as $row){
        
        // verifie le mot de passe et sauvegarde les infos de sessions
        if(password_verify($_POST['password'],$row['password'])){
           $_SESSION['user_id']=$row['user_id'];
           
          $_SESSION['username']=$row['username'];
         header('location:./index.php?action=home');
        } else {
        
          $message = ' wrong password';
          echo $message;
          
          require_once('./view/connexionView.php');
        }
      }
    }else{
        echo $result;
        require_once('./view/connexionView.php');    
    }
  }
  require_once('./view/connexionView.php');
}
function subscribe(){
  if(isset($_POST['name'])){
    var_dump($_POST['name']);
    $statement = subscribeSql();
  }
  require('./view/subscribeView.php');
}