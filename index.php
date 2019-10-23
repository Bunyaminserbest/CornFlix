<?php

require('./controller/controller.php');
session_start();
if(isset($_SESSION['user_id'])){
    if(isset($_GET['action'])){
        if($_GET['action'] == 'home'){
            require('./view/indexView.php');
        }
    }
    
  } else if(isset($_GET['action'])){
if($_GET['action']== 'login'){
    login();
}
}
else{
    require('./view/landing.php');
}