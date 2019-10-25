
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/carousel.css">
  <script src="https://kit.fontawesome.com/09a3209f4f.js" crossorigin="anonymous"></script>
  <script src="./js/carousel.js"></script>
  <title><?= $title?></title>
</head>
<body>
  

<!-- BARRE DE NAVIGATION -->

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="main.php">KornFlix</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto navUl">
      <li class="nav-item active navUl">
        <a class="nav-link" href="#">Accueil <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown navUl">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Films
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="./index.php?action=category&id=28">Action</a>
          <a class="dropdown-item" href="./index.php?action=category&id=12">Adventure</a>
          <a class="dropdown-item" href="./index.php?action=category&id=16">Animation</a>
          <a class="dropdown-item" href="./index.php?action=category&id=35">Comedy</a>
          <a class="dropdown-item" href="./index.php?action=category&id=80">Crime</a>
          <a class="dropdown-item" href="./index.php?action=category&id=99">Documentary</a>
          <a class="dropdown-item" href="./index.php?action=category&id=10751">Family</a>  
          <a class="dropdown-item" href="./index.php?action=category&id=14">Fantasy</a>
          <a class="dropdown-item" href="./index.php?action=category&id=36">History</a>
          <a class="dropdown-item" href="./index.php?action=category&id=27">Horor</a>
          <a class="dropdown-item" href="./index.php?action=category&id=10402">Music</a>
        </div>
      </li>
      <li class="nav-item dropdown navUl">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Series
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="">Action</a>
          <a class="dropdown-item" href="">Adventure</a>
          <a class="dropdown-item" href="">Animation</a>
          <a class="dropdown-item" href="">Comedy</a>
          <a class="dropdown-item" href="">Crime</a>
          <a class="dropdown-item" href="">Documentary</a>
          <a class="dropdown-item" href="">Family</a>  
          <a class="dropdown-item" href="">Fantasy</a>
          <a class="dropdown-item" href=".>History</a>
          <a class="dropdown-item" href="">Horor</a>
          <a class="dropdown-item" href="">Music</a>
         
        </div>
      </li>
      
    </ul>
    <?php if(isset($_SESSION['user_id'])){
      echo '<form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="my-2 my-sm-0 searchBtn" type="submit">Search</button>
    </form>

    <div class="dropdown">
     <button style="color:grey;" type="button" class="btn  dropdown-toggle" data-toggle="dropdown" ><i class="fas fa-user fa-2x" ></i></a>
     </button>
     <div class="dropdown-menu">
      <a class="dropdown-item" href="./index.php?action=login">Sign-in</a>
      <a class="dropdown-item" href="./index.php?action=profil">My profil</a>
      <a class="dropdown-item" href="#">My list</a>
      <a class="dropdown-item" href="./view/logout.php">Logout</a>
    </div>

  </div>';
    }else{
echo '<a href="./index.php?action=login" class="btn btn-nav">login</a>
<a href="./index.php?action=subscribe" class="btn btn-nav">inscription</a>';
    }
    ?>
    </nav>