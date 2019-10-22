<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Connexion</title>
</head>
<body>

<form action="action_page.php" method="post">

  <div class="container">

    <label for="uname">Username</label>
    <input type="text" placeholder="Enter Username" name="uname" required><br/>

    <label for="psw">Password</label>
    <input type="password" placeholder="Enter Password" name="psw" required><br/>

    <button type="submit">Login</button>
    
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>

  </div>

</form>

  <?php 

//  Récupération de l'utilisateur et de son pass hashé
$passU_rec = $bdd->prepare('SELECT id, password FROM login WHERE pseudo = :pseudo');
$passU_rec->execute(array(
    'pseudo' => $pseudo));
$resultat = $passU_rec->fetch();

// Comparaison du pass envoyé via le formulaire avec la base
$isPasswordCorrect = password_verify($_POST['pass'], $resultat['pass']);

if (!$resultat)
{
    echo 'Mauvais identifiant ou mot de passe !';
}
else
{
    if ($isPasswordCorrect) {
        session_start();
        $_SESSION['id'] = $resultat['id'];
        $_SESSION['pseudo'] = $pseudo;
        echo 'Vous êtes connecté !';
    }
    else {
        echo 'Mauvais identifiant ou mot de passe !';
    }
}
?>
</body>
</html>