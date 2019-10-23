<?php
require('./controller/controller.php');
session_start();
if(isset($_SESSION['user_id'])){
    require('./view/indexView.php');
  } else if(isset($_GET['action'])){
if($_GET['action']== 'login'){
    login();
}
}else{
    header('location:view/landing.php');
}