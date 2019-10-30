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
  $result = $statement->execute($data);
  return $result;
}
//GET COMMENTS FROM DB
function getComments($id_movie)
{
    $db = connect_db();
    $comments = $db->prepare('SELECT id, username, comment, DATE_FORMAT(date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr FROM comment WHERE id_movie = ? ORDER BY date DESC');
    $comments->execute(array($id_movie));
    //var_dump($id_movie);
    //var_dump($comments);
    return $comments;

//INSERT INTO COMMENT DB
}
function postComment($id_movie, $username, $comment){
  $db = connect_db();
  $data = $db->prepare('INSERT INTO comment (id_movie, username, comment, date) VALUES (?, ?, ?, NOW())');
  $affectedLines = $data->execute(array($id_movie, $username, $comment));

  return $affectedLines;
}
function addAvatar($data){
  $db = connect_db();

  $query="UPDATE login SET avatar=:avatar WHERE user_id = :id";
  $statement = $db->prepare($query);
  $result = $statement->execute($data);
   
    return $result;
}
function userData(){
  $db= connect_db();
  $getId = $_GET['id'];
  $sql= "SELECT * FROM login WHERE user_id = $getId";
  $result = $db->query($sql);
  return $result;
}
function changeMail($data){
$db = connect_db();
$query = "UPDATE login SET email = :newMail WHERE user_id = :id";
$statement = $db->prepare($query);
  $result = $statement->execute($data);
   
    return $result;
}
function changePassword($data){
  $db = connect_db();
$query = "UPDATE login SET password = :newPassword WHERE user_id = :id";
$statement = $db->prepare($query);
  $result = $statement->execute($data);
   
    return $result;
}
?>