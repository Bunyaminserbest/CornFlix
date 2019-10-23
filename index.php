<?php
require('./controller/controller.php');
if(isset($_SESSION['user_id'])){
    header('location:./view/indexView.php');
  } else if(isset($_GET['action'])){
if($_GET['action']== 'login'){
    login();
}
}else{
    login();
}