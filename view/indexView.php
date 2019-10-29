
<?php 
$title= 'KornFlix'; 
include('header.php');
?>

<h1>T'es bien connecté</h1>
  <a href="view/logout.php">Deconnection</a>


<h1 class="container text-center mb-0 pt-3 pb-3">MOVIES</h1>


<!--Carousel Movies-->
<div id="carouselMovies" class="carousel slide container" >
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

<div id="carouselTvShow" class="carousel slide container">
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




<section id="genresfilm" class="container" >
<div class="">
    <div class="d-flex align-items-center pt-3 pb-3">
      <h3 class="pr-3 ">Action</h3>
      <a href="index.php?action=categoryFilm&id=28">See more...</a>
    </div>
    <div id="action" class="d-flex justify-content-between"></div>
  </div>

  <div>
    <div class="d-flex align-items-center pt-3 pb-3">
      <h3 class="pr-3">Adventure</h3>
      <a href="index.php?action=categoryFilm&id=12">See more...</a>
    </div>
    <div id="adventure" class="d-flex justify-content-between"></div>
  </div>

  <div>
    <div class="d-flex align-items-center pt-3 pb-3">
      <h3 class="pr-3">Animation</h3>
      <a href="index.php?action=categoryFilm&id=16">See more...</a>
    </div>
    <div id="animation" class="d-flex justify-content-between"></div>
  </div>

  <div>
    <div class="d-flex align-items-center pt-3 pb-3">
      <h3 class="pr-3">Comedy</h3>
      <a href="index.php?action=categoryFilm&id=35">See more...</a>
    </div>
    <div id="comedy" class="d-flex justify-content-between"></div>
  </div>

  <div>
    <div class="d-flex align-items-center pt-3 pb-3">
    <h3 class="pr-3">Crime</h3>
    <a href="index.php?action=categoryFilm&id=80">See more...</a>
    </div>
    <div id="crime" class="d-flex justify-content-between"></div>
  </div>

  <div>
    <div class="d-flex align-items-center pt-3 pb-3">
    <h3 class="pr-3">Documentary</h3>
    <a href="index.php?action=categoryFilm&id=99">See more...</a>
    </div>
    <div id="documentary" class="d-flex justify-content-between"></div>
  </div>

  <div>
    <div class="d-flex align-items-center pt-3 pb-3">
    <h3 class="pr-3">Drama</h3>
    <a href="index.php?action=categoryFilm&id=28">See more...</a>
    </div>
    <div id="drama" class="d-flex justify-content-between"></div>
  </div>

  <div>
    <div class="d-flex align-items-center pt-3 pb-3">
    <h3 class="pr-3">Family</h3>
    <a href="index.php?action=categoryFilm&id=10751">See more...</a>
    </div>
    <div id="family" class="d-flex justify-content-between"></div>
  </div>

  <div>
    <div class="d-flex align-items-center pt-3 pb-3">
    <h3 class="pr-3">Fantasy</h3>
    <a href="index.php?action=categoryFilm&id=14">See more...</a>
    </div>
    <div id="fantasy" class="d-flex justify-content-between"></div>
  </div>

  <div>
    <div class="d-flex align-items-center pt-3 pb-3">
    <h3 class="pr-3">History</h3>
    <a href="index.php?action=categoryFilm&id=36">See more...</a>
    </div>
    <div id="history" class="d-flex justify-content-between"></div>
  </div>

  <div>
    <div class="d-flex align-items-center pt-3 pb-3">
    <h3 class="pr-3">Horror</h3>
    <a href="index.php?action=categoryFilm&id=27">See more...</a>
    </div>
    <div id="horror" class="d-flex justify-content-between"></div>
  </div>

  <div>
    <div class="d-flex align-items-center pt-3 pb-3">
    <h3 class="pr-3">Music</h3>
    <a href="index.php?action=categoryFilm&id=10402">See more...</a>
    </div>
    <div id="music" class="d-flex justify-content-between"></div>
  </div>
</section>


<script>
  
   /* function details() {
      var data = "{}";

      var xhr = new XMLHttpRequest();


      xhr.addEventListener("readystatechange", function () {
        if (this.readyState === this.DONE) {
          let details = JSON.parse(this.responseText)
          console.log(details.results)
          for(i=0; i<2; i++){
          document.getElementById(`poster${i}`).src = "https://image.tmdb.org/t/p/w200/" + details.results[i].poster_path
          //document.getElementById("poster2").src = "https://image.tmdb.org/t/p/w200/" + details.poster_path
          /*document.getElementById("title").innerHTML = details.title
          document.getElementById("genres").innerHTML = details.genres[0].name
          document.getElementById("lang").innerHTML = "Language: " + details.original_language
          document.getElementById("overview").innerHTML = details.overview
          document.getElementById("vote").innerHTML = "Vote: " + details.vote_average + "/10"
          document.getElementById("release").innerHTML = details.release_date[0]



        }
      });

      xhr.open("GET","https://api.themoviedb.org/3/discover/movie?api_key=a85ec5f726223d34a1135bd216c3bd56&language=en-US&sort_by=popularity.desc&include_adult=false&include_video=false&page=1");

      xhr.send(data);
    }*/

    /*FETCH MOVIES API*/
    fetch("https://api.themoviedb.org/3/discover/movie?api_key=a85ec5f726223d34a1135bd216c3bd56&language=en-US")
    .then(response => response.json())
    .then(data=> {
      getMovie(data.results)
      
    })
    function getMovie(movies){
      for(i=0; i<20; i++){
        if (i<5){
            document.getElementById(`movie1`).innerHTML += `<a href="./index.php?action=player&id=${movies[i].id}"><img id="post${i}" src="https://image.tmdb.org/t/p/w200/${movies[i].poster_path}" class="d-block" alt=""></a>`
          }else if (i<10){
            document.getElementById(`movie2`).innerHTML += `<a href="./index.php?action=player&id=${movies[i].id}"><img id="post${i}" src="https://image.tmdb.org/t/p/w200/${movies[i].poster_path}" class="d-block" alt=""></a>`
          }else if(i<15){
            document.getElementById(`movie3`).innerHTML += `<a href="./index.php?action=player&id=${movies[i].id}"><img id="post${i}" src="https://image.tmdb.org/t/p/w200/${movies[i].poster_path}" class="d-block" alt=""></a>`
          }else{
          document.getElementById(`movie4`).innerHTML += `<a href="./index.php?action=player&id=${movies[i].id}"><img id="post${i}" src="https://image.tmdb.org/t/p/w200/${movies[i].poster_path}" class="d-block" alt=""></a>`
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
          document.getElementById(`tvShow1`).innerHTML += `<a href="./index.php?action=playerSeries&id=${movies[i].id}"><img id="tv${i}" src="https://image.tmdb.org/t/p/w200/${movies[i].poster_path}" class="d-block" alt=""></a>`
        }else if (i<10){
          document.getElementById(`tvShow2`).innerHTML += `<a href="./index.php?action=playerSeries&id=${movies[i].id}"><img id="tv${i}" src="https://image.tmdb.org/t/p/w200/${movies[i].poster_path}" class="d-block" alt=""></a>`
        }else if(i<15){
          document.getElementById(`tvShow3`).innerHTML += `<a href="./index.php?action=playerSeries&id=${movies[i].id}"><img id="tv${i}" src="https://image.tmdb.org/t/p/w200/${movies[i].poster_path}" class="d-block" alt=""></a>`
        }else{
          document.getElementById(`tvShow4`).innerHTML += `<a href="./index.php?action=playerSeries&id=${movies[i].id}"><img id="tv${i}" src="https://image.tmdb.org/t/p/w200/${movies[i].poster_path}" class="d-block" alt=""></a>`
        }
      }
    }




    function getCategory(id,nbrToShow, category){
      fetch(`https://api.themoviedb.org/3/discover/movie?api_key=a85ec5f726223d34a1135bd216c3bd56&&with_genres=${id}`)
      .then(response => response.json())
      .then(data=> {
      
      showCategory(data.results, nbrToShow, category)
    })}
    function showCategory(movies, nbrToShow, category){
      for (i=0; i<nbrToShow; i++){
        
      document.getElementById(`${category}`).innerHTML += `<a href="./index.php?action=player&id=${movies[i].id}"><img id=${category+i} src="https://image.tmdb.org/t/p/w200/${movies[i].poster_path}"></a>`
      }
    };
getCategory(28,5,"action")
getCategory(12,5,"adventure")
getCategory(16,5,"animation")
getCategory(35,5,"comedy")
getCategory(80,5,"crime")
getCategory(99,5,"documentary")
getCategory(28,5,"drama")
getCategory(10751,5,"family")
getCategory(14,5,"fantasy")
getCategory(36,5,"history")
getCategory(27,5,"horror")
getCategory(10402,5,"music")


function modal(i){
  document.getElementById(`post0`).onclick = function(){
    console.log("hello")
    document.getElementById(`post0`).innerHTML += `Hello`

  
}
}
    </script>

<?php
include('footer.php')
?>
