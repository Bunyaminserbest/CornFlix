
<?php 
$title= 'KornFlix'; 
include('header.php');
?>

<h1>T'es bien connecté</h1>
  <a href="view/logout.php">Deconnection</a>


<h1>MOVIES</h1>
<h2 id="ij">cat</h2>



<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div id="list" class="carousel-item active">
      <img id= "poster0" src="" class="d-block" alt="">
      <img id= "poster1" src="" class="d-block" alt="">
      <img id= "poster2" src="" class="d-block" alt="">
      <img id= "poster3" src="" class="d-block" alt="">
      <img id= "poster4" src="" class="d-block" alt="">
      <img id= "poster5" src="" class="d-block" alt="">


    </div>
    <div class="carousel-item">
    <img id= "poster6" src="" class="d-block" alt="">
    <img id= "poster7" src="" class="d-block" alt="">
    <img id= "poster8" src="" class="d-block" alt="">
    <img id= "poster9" src="" class="d-block" alt="">
    <img id= "poster10" src="" class="d-block" alt="">
    <img id= "poster11" src="" class="d-block" alt="">
    </div>
    
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

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
    fetch("https://api.themoviedb.org/3/discover/movie?api_key=a85ec5f726223d34a1135bd216c3bd56&language=en-US")
    .then(response => response.json())
    .then(data=> {
      console.log(data)
      getPoster(data.results)
    })
    function getPoster(movies){
      for(i=0; i<12; i++){
        document.getElementById(`poster${i}`).src = "https://image.tmdb.org/t/p/w200/" + movies[i].poster_path
      }
    }
    window.onload = details()
    </script>

</body>
</html>