<?php
// connection à la base de donnée
function connect_db()
{
  try {
    $db = new PDO('mysql:host=localhost;dbname=Cornflix', 'root', '');
    return $db;
  } catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
  }
}
// requêtes sql pour le login
function loginSql()
{
  $db = connect_db();
  $data = [':username' => $_POST['username']];
  $query = "SELECT * FROM login WHERE username = :username";
  $statement = $db->prepare($query);
  $statement->execute($data);
  $count = $statement->rowCount();
  if ($count > 0) {
    $result = $statement->fetchAll();
    return $result;
  } else {
    $message = '<label> wrong username </label>';
    return $message;
  }
}
function subscribeSql($data)
{
  $db = connect_db();

  $query = "INSERT INTO login
  (name,lastname,email,username,password)
  VALUES (:name,:lastname,:email,:username,:password)";
  $statement = $db->prepare($query);
  $result = $statement->execute($data);
  return $result;
}
