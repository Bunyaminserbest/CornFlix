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
function contactSql($data)
{
  $db = connect_db();

  $query = "INSERT INTO messages
  (username, email, subject, message)
  VALUES (:username,:email,:subject,:message)";
  $statement = $db->prepare($query);
  var_dump($statement);
  $result = $statement->execute($data);
  var_dump($data);
  var_dump($result);
  return $result;
}
function postComment($id_movie, $username, $comment){

    $db = connect_db();
    $comments = $db->prepare('INSERT INTO comment(id_movie, username, comment, comment_date ) VALUE (?,?,?, NOW())');
    $affectedLines = $comments->execute(array($id_movie, $username, $comment));

    return $affectedLines;
}

?>