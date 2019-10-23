
<?php 

session_start();


$title= 'KornFlix'; 
ob_start(); ?>
<h1>T'es bien connecté</h1>
  <a href="./logout.php">Deconnection</a>
<?php $content = ob_get_clean(); 
  require('../template.php');?>