
<?php 
$title= 'KornFlix'; 
include('header.php');
?>
<section class="container text-center">
<h1>Welcome <?= $_SESSION['username'] ?></h1>
  <h2>What do you wanna watch today?</h2>
</section>

<h1 class="container text-center mb-0 pt-3 pb-3">MOVIES</h1>


<!--Carousel Movies-->
<div id="carouselMovies" class="carousel slide " >
  <div class="carousel-inner ">

    <div  class="carousel-item test active ">
      <div id="movie1" class="row"></div>
    </div>
    <div  class="carousel-item test ">
      <div id="movie2"class="row"></div>
    </div>
    <div class="carousel-item test ">
      <div id="movie3"  class="row"></div>
    </div>
    <div  class="carousel-item test">
      <div id="movie4" class="row"></div>
    </div>
    
    <a class="carousel-control-prev" href="#carouselMovies" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselMovies" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

  
  
<h1 class="container text-center mb-0 pt-3 pb-3">SERIES</h1>
<!--Carousel tvShow-->

<div id="carouselTvShow" class="carousel slide">
  <div class="carousel-inner ">
    
    <div  class="carousel-item test active">
      <div id="tvShow1" class="row"></div>
    </div>
    <div  class="carousel-item test">
      <div id="tvShow2" class="row"></div>
    </div>
    <div  class="carousel-item test">
      <div id="tvShow3" class="row"></div>
    </div>
    <div  class="carousel-item test">
      <div id="tvShow4" class="row"></div>
    </div>
  
    <a class="carousel-control-prev" href="#carouselTvShow" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselTvShow" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>

  </div>
</div>


<!--Categories-->

<section id="genres" class="container" >
<div class="">
    <div class="d-flex align-items-center pt-3 pb-3">
      <h3 class="pr-3 ">Action</h3>
      <a href="index.php?action=categoryFilm&id=28">See more...</a>
    </div>
    <div id="action" class="d-flex justify-content-between" style="display: flex;flex-wrap: wrap;"></div>
  </div>

  <div>
    <div class="d-flex align-items-center pt-3 pb-3">
      <h3 class="pr-3">Adventure</h3>
      <a href="index.php?action=categoryFilm&id=12">See more...</a>
    </div>
    <div id="adventure" class="d-flex justify-content-between" style="display: flex;flex-wrap: wrap;"></div>
  </div>

  <div>
    <div class="d-flex align-items-center pt-3 pb-3">
      <h3 class="pr-3">Animation</h3>
      <a href="index.php?action=categoryFilm&id=16">See more...</a>
    </div>
    <div id="animation" class="d-flex justify-content-between" style="display: flex;flex-wrap: wrap;"></div>
  </div>

  <div>
    <div class="d-flex align-items-center pt-3 pb-3">
      <h3 class="pr-3">Comedy</h3>
      <a href="index.php?action=categoryFilm&id=35">See more...</a>
    </div>
    <div id="comedy" class="d-flex justify-content-between" style="display: flex;flex-wrap: wrap;"></div>
  </div>

  <div>
    <div class="d-flex align-items-center pt-3 pb-3">
    <h3 class="pr-3">Crime</h3>
    <a href="index.php?action=categoryFilm&id=80">See more...</a>
    </div>
    <div id="crime" class="d-flex justify-content-between" style="display: flex;flex-wrap: wrap;"></div>
  </div>

  <div>
    <div class="d-flex align-items-center pt-3 pb-3">
    <h3 class="pr-3">Drama</h3>
    <a href="index.php?action=categoryFilm&id=28">See more...</a>
    </div>
    <div id="drama" class="d-flex justify-content-between" style="display: flex;flex-wrap: wrap;"></div>
  </div>

  <div>
    <div class="d-flex align-items-center pt-3 pb-3">
    <h3 class="pr-3">Family</h3>
    <a href="index.php?action=categoryFilm&id=10751">See more...</a>
    </div>
    <div id="family" class="d-flex justify-content-between" style="display: flex;flex-wrap: wrap;"></div>
  </div>

  <div>
    <div class="d-flex align-items-center pt-3 pb-3">
    <h3 class="pr-3">Fantasy</h3>
    <a href="index.php?action=categoryFilm&id=14">See more...</a>
    </div>
    <div id="fantasy" class="d-flex justify-content-between" style="display: flex;flex-wrap: wrap;"></div>
  </div>

  <div>
    <div class="d-flex align-items-center pt-3 pb-3">
    <h3 class="pr-3">History</h3>
    <a href="index.php?action=categoryFilm&id=36">See more...</a>
    </div>
    <div id="history" class="d-flex justify-content-between" style="display: flex;flex-wrap: wrap;"></div>
  </div>

  <div>
    <div class="d-flex align-items-center pt-3 pb-3">
    <h3 class="pr-3">Horror</h3>
    <a href="index.php?action=categoryFilm&id=27">See more...</a>
    </div>
    <div id="horror" class="d-flex justify-content-between" style="display: flex;flex-wrap: wrap;"></div>
  </div>

  <div>
    <div class="d-flex align-items-center pt-3 pb-3">
    <h3 class="pr-3">Music</h3>
    <a href="index.php?action=categoryFilm&id=10402">See more...</a>
    </div>
    <div id="music" class="d-flex justify-content-between" style="display: flex;flex-wrap: wrap;"></div>
  </div>
</section>


<script>
  
    /*FETCH MOVIES API*/
    fetch("https://api.themoviedb.org/3/discover/movie?api_key=a85ec5f726223d34a1135bd216c3bd56&language=en-US")
    .then(response => response.json())
    .then(data=> {
      getMovie(data.results)
      
    })
    function getMovie(movies){
      for(i=0; i<20; i++){
        if (i<5){
            document.getElementById(`movie1`).innerHTML += `<a href="./index.php?action=player&id=${movies[i].id}"><img data-toggle="popover" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?" id="post${i}" src="https://image.tmdb.org/t/p/w200/${movies[i].poster_path}" class="d-block" alt="${movies[i].title}"></a>`
          }else if (i<10){
            document.getElementById(`movie2`).innerHTML += `<a href="./index.php?action=player&id=${movies[i].id}"><img id="post${i}" src="https://image.tmdb.org/t/p/w200/${movies[i].poster_path}" class="d-block" alt="${movies[i].title}"></a>`
          }else if(i<15){
            document.getElementById(`movie3`).innerHTML += `<a href="./index.php?action=player&id=${movies[i].id}"><img id="post${i}" src="https://image.tmdb.org/t/p/w200/${movies[i].poster_path}" class="d-block" alt="${movies[i].title}"></a>`
          }else{
          document.getElementById(`movie4`).innerHTML += `<a href="./index.php?action=player&id=${movies[i].id}"><img id="post${i}" src="https://image.tmdb.org/t/p/w200/${movies[i].poster_path}" class="d-block" alt="${movies[i].title}"></a>`
        }
      }
       
    }
   

   /*FETCH TVSHOW API*/
   fetch("https://api.themoviedb.org/3/discover/tv?api_key=a85ec5f726223d34a1135bd216c3bd56&language=en-US")
    .then(response => response.json())
    .then(data=> {
      
      getTvshow(data.results)
    })
    function getTvshow(movies){
      for(i=0; i<20; i++){
        if (i<5){
          document.getElementById(`tvShow1`).innerHTML += `<a href="./index.php?action=playerSeries&id=${movies[i].id}"><img id="tv${i}" src="https://image.tmdb.org/t/p/w200/${movies[i].poster_path}" class="d-block" alt="${movies[i].title}"></a>`
        }else if (i<10){
          document.getElementById(`tvShow2`).innerHTML += `<a href="./index.php?action=playerSeries&id=${movies[i].id}"><img id="tv${i}" src="https://image.tmdb.org/t/p/w200/${movies[i].poster_path}" class="d-block" alt="${movies[i].title}"></a>`
        }else if(i<15){
          document.getElementById(`tvShow3`).innerHTML += `<a href="./index.php?action=playerSeries&id=${movies[i].id}"><img id="tv${i}" src="https://image.tmdb.org/t/p/w200/${movies[i].poster_path}" class="d-block" alt="${movies[i].title}"></a>`
        }else{
          document.getElementById(`tvShow4`).innerHTML += `<a href="./index.php?action=playerSeries&id=${movies[i].id}"><img id="tv${i}" src="https://image.tmdb.org/t/p/w200/${movies[i].poster_path}" class="d-block" alt="${movies[i].title}"></a>`
        }
      }
    }



    //FETCH CATEGORIES
    function getCategory(id,nbrToShow, category){
      fetch(`https://api.themoviedb.org/3/discover/movie?api_key=a85ec5f726223d34a1135bd216c3bd56&&with_genres=${id}`)
      .then(response => response.json())
      .then(data=> {
      
      showCategory(data.results, nbrToShow, category)
    })}
    function showCategory(movies, nbrToShow, category){
      for (i=0; i<nbrToShow; i++){
        
      document.getElementById(`${category}`).innerHTML += `<a href="./index.php?action=player&id=${movies[i].id}"><img id=${category+i} src="https://image.tmdb.org/t/p/w200/${movies[i].poster_path}" alt="id=${movies[i].title}"></a>`
      }
    };
getCategory(28,5,"action")
getCategory(12,5,"adventure")
getCategory(16,5,"animation")
getCategory(35,5,"comedy")
getCategory(80,5,"crime")
getCategory(28,5,"drama")
getCategory(10751,5,"family")
getCategory(14,5,"fantasy")
getCategory(36,5,"history")
getCategory(27,5,"horror")
getCategory(10402,5,"music")


$(document).ready(function(){
        $("#myModal").modal('show');
    });
    </script>

    <!-- Modal -->
<div class="modal fade top" id="mymodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalPreviewLabel" aria-hidden="true">
  <div class="modal-dialog modal-fluid modal-full-height modal-top" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalPreviewLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->

<?php
include('footer.php')
?>
