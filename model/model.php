<?php
function connect_db(){
  try
  {
    $bdd =new PDO('mysql:host=localhost2:3306;dbname=id11312830_cornflix', 'root', '');
  }
  catch(Exception $e)
  {
          die('Erreur : '.$e->getMessage());
  }
}
?>