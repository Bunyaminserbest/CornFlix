<?php 

session_start();
    
    $id= $_SESSION['user_id'];
    $db = new PDO('mysql:host=localhost;dbname=a70j0_bdd_ehanon', 'root', 'root');
    $bd = $db->query("DELETE  FROM `shoppingcart` WHERE id_user=$id");
  /*   var_dump($bd); */
    header('location: ../index.php?action=home');
    
?>