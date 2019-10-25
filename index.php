<?php

require('./controller/controller.php');
session_start();
$user_id = isset($_SESSION['user_id']);
if ($user_id) {
    if ($_GET['action'] == 'home') {
        require('./view/indexView.php');
    }else if ($_GET['action'] == 'cgv'){
        require('./view/cgvView.php');
    }elseif ($_GET['action']== 'faq'){
        require('./view/faqView.php');
    }elseif ($_GET['action']== 'Contact-us'){
        require('./view/contactView.php');
    }elseif ($_GET['action']== 'profil'){
        require('./view/profileView.php');
    }else if($_GET['action'] == 'category'){
        require('./view/categoryView.php');
    }else if($_GET['action'] == 'player'){
        require('./view/playerView.php');
    }else{
    require('./view/indexView.php');
}
} else if (isset($_GET['action'])) {
    if ($_GET['action'] == 'login') {
        login();
    }else if ($_GET['action'] == 'cgv'){
        require('./view/cgvView.php');
    }elseif ($_GET['action']== 'faq'){
        require('./view/faqView.php');
    }elseif ($_GET['action']== 'Contact-us'){
        require('./view/contactView.php');
    }elseif ($_GET['action']== 'profil'){
        require('./view/profileView.php');
    }else if($_GET['action'] == 'subscribe'){
        subscribe();
    }else if($_GET['action'] == 'category'){
        require('./view/categoryView.php');
    }}
 else {
    require('./view/landing.php');
}

