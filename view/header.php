
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/carousel.css">
  <link rel="stylesheet" href="css/mobile.css">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu|Ubuntu+Condensed&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/09a3209f4f.js" crossorigin="anonymous"></script>
  <script src="./js/carousel.js"></script>
  <script src="./js/script.js"></script>
  <link rel="icon" type="image/jpg" href="./klogo.jpg" />
  <title><?= $title?></title>
</head>
<body>
  

<!-- BARRE DE NAVIGATION -->


<nav class="navbar navbar-expand-lg navbar-dark navbarStyle">
  <a id="logoo" class="navbar-brand" href="./index.php?action=home"><img class="logo" src="./logo-crop.png" alt="logo Kornflix"></a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navmenu navbar-nav mr-auto navUl">
      <li class="navmenu nav-item active navUl col-md-2 col-sm-12">
        <a class="nav-link" href="./index.php?action=home">Accueil <span class="sr-only">(current)</span></a>
      </li>
      <li class="navmenu nav-item dropdown navUl col-md-2">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Films
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="./index.php?action=categoryFilm&id=28">Action</a>
          <a class="dropdown-item" href="./index.php?action=categoryFilm&id=12">Adventure</a>
          <a class="dropdown-item" href="./index.php?action=categoryFilm&id=16">Animation</a>
          <a class="dropdown-item" href="./index.php?action=categoryFilm&id=35">Comedy</a>
          <a class="dropdown-item" href="./index.php?action=categoryFilm&id=80">Crime</a>
          <a class="dropdown-item" href="./index.php?action=categoryFilm&id=99">Documentary</a>
          <a class="dropdown-item" href="./index.php?action=categoryFilm&id=10751">Family</a>  
          <a class="dropdown-item" href="./index.php?action=categoryFilm&id=14">Fantasy</a>
          <a class="dropdown-item" href="./index.php?action=categoryFilm&id=36">History</a>
          <a class="dropdown-item" href="./index.php?action=categoryFilm&id=27">Horor</a>
          <a class="dropdown-item" href="./index.php?action=categoryFilm&id=10402">Music</a>
        </div>
      </li>
      <li class="navmenu nav-item dropdown navUl col-md-2">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Series
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="./index.php?action=categorySerie&id=28">Action</a>
          <a class="dropdown-item" href="./index.php?action=categorySerie&id=12">Adventure</a>
          <a class="dropdown-item" href="./index.php?action=categorySerie&id=16">Animation</a>
          <a class="dropdown-item" href="./index.php?action=categorySerie&id=35">Comedy</a>
          <a class="dropdown-item" href="./index.php?action=categorySerie&id=80">Crime</a>
          <a class="dropdown-item" href="./index.php?action=categorySerie&id=99">Documentary</a>
          <a class="dropdown-item" href="./index.php?action=categorySerie&id=18">Drama</a>
          <a class="dropdown-item" href="./index.php?action=categorySerie&id=10751">Family</a>  
          <a class="dropdown-item" href="./index.php?action=categorySerie&id=14">Fantasy</a>
          <a class="dropdown-item" href="./index.php?action=categorySerie&id=36">History</a>
          <a class="dropdown-item" href="./index.php?action=categorySerie&id=27">Horor</a>
          <a class="dropdown-item" href="./index.php?action=categorySerie&id=10402">Music</a>
         
        </div>
      </li>
      
    </ul>
    <?php if(isset($_SESSION['user_id'])){
      echo '<form id="search" action=""  method="Get" class="form-inline my-2 my-lg-0 ">
      <input  type="hidden" name="action" value="search">
      <input id="searchBox" class="search form-control mr-sm-2 text-center" name="query" type="search" placeholder="Search" aria-label="Search">
      <button id="searchBtn" class="my-2 my-sm-0 searchBtn btn" type="submit">Search</button>
    </form>

    <div class="dropdown d-flex justify-content-center">
     <button style="color:grey;" type="button" class="btn  dropdown-toggle col-md-1" data-toggle="dropdown" ><i class="fas fa-user fa-2x" ></i></a>
     </button>
     <div class="dropdown-menu col-md-2 text-center DDM">
      <a class="dropdown-item" href="./index.php?action=profil&id='.$_SESSION['user_id'].'">My profil</a>
      <a class="dropdown-item" href="./view/logout.php">Logout</a>
    </div>

  </div>';
    }else{
echo '<div class="d-flex"><a href="./index.php?action=login" class="btn btn-nav col-sm-5">login</a>
<a href="./index.php?action=subscribe" class="btn btn-nav">inscription</a>';
    }
    ?>
    </nav>