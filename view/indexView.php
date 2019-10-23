
<?php 
$title= 'KornFlix'; 
include('header.php');


var_dump($_SESSION['user_id']);



?>
<h1>T'es bien connecté</h1>
  <a href="view/logout.php">Deconnection</a>
<?php 
include('footer.php');
?>
