
<?php 
$title= 'KornFlix'; 
include('header.php');
?>

<h1>T'es bien connecté</h1>
  <a href="view/logout.php">Deconnection</a>


<h1>MOVIES</h1>


<!--Carousel Movies-->
<div id="carouselMovies" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div id="movie1" class="carousel-item test active"></div>
    <div id="movie2" class="carousel-item test"></div>
    <div id="movie3" class="carousel-item test"></div>
    <div id="movie4" class="carousel-item test"></div>
    
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

  
  
<h1>SERIES</h1>
<!--Carousel tvShow-->

<div id="carouselTvShow" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    
    <div id="tvShow1" class="carousel-item test active"></div>
    <div id="tvShow2" class="carousel-item test"></div>
    <div id="tvShow3" class="carousel-item test"></div>
    <div id="tvShow4" class="carousel-item test"></div>
  
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


-->

<section id="genres">
  <div class="action"></div>
  <div class="adventure"></div>
  <div class="animation"></div>
  <div class="comedy"></div>
  <div class="crime"></div>
  <div class="documentary"></div>
  <div class="drama"></div>
  <div class="family"></div>
  <div class="fantasy"></div>
  <div class="history"></div>
  <div class="horror"></div>
  <div class="music"></div>



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
      getPoster(data.results)
    })
    function getPoster(movies){
      for(i=0; i<20; i++){
        if (i<5){
          document.getElementById(`movie1`).innerHTML += `<img id="post${i}" src="https://image.tmdb.org/t/p/w200/${movies[i].poster_path}" class="d-block" alt="">`
        }else if (i<10){
          document.getElementById(`movie2`).innerHTML += `<img id="post${i}" src="https://image.tmdb.org/t/p/w200/${movies[i].poster_path}" class="d-block" alt="">`
        }else if(i<15){
          document.getElementById(`movie3`).innerHTML += `<img id="post${i}" src="https://image.tmdb.org/t/p/w200/${movies[i].poster_path}" class="d-block" alt="">`
        }else{
          document.getElementById(`movie4`).innerHTML += `<img id="post${i}" src="https://image.tmdb.org/t/p/w200/${movies[i].poster_path}" class="d-block" alt="">`
        }
      }
    }
   

   /*FETCH TVSHOW API*/
   fetch("https://api.themoviedb.org/3/discover/tv?api_key=a85ec5f726223d34a1135bd216c3bd56&language=en-US")
    .then(response => response.json())
    .then(data=> {
      console.log(data)
      gettvShow(data.results)
    })
    function gettvShow(movies){
      for(i=0; i<20; i++){
        if (i<5){
          document.getElementById(`tvShow1`).innerHTML += `<img id="tv${i}" src="https://image.tmdb.org/t/p/w200/${movies[i].poster_path}" class="d-block" alt="">`
        }else if (i<10){
          document.getElementById(`tvShow2`).innerHTML += `<img id="tv${i}" src="https://image.tmdb.org/t/p/w200/${movies[i].poster_path}" class="d-block" alt="">`
        }else if(i<15){
          document.getElementById(`tvShow3`).innerHTML += `<img id="tv${i}" src="https://image.tmdb.org/t/p/w200/${movies[i].poster_path}" class="d-block" alt="">`
        }else{
          document.getElementById(`tvShow4`).innerHTML += `<img id="tv${i}" src="https://image.tmdb.org/t/p/w200/${movies[i].poster_path}" class="d-block" alt="">`
        }
      }
    }
    
 


    </script>

<?php
include('footer.php')
?>
