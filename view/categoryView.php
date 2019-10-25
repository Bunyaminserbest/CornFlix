<?php
$title = 'Category';
include('header.php')
?>
<h1>Movies category</h1>
<section id='category'></section>
<script>
let id = '<?= $_GET['id']?>'
console.log(id)
let url = `https://api.themoviedb.org/3/discover/movie?api_key=a85ec5f726223d34a1135bd216c3bd56&with_genres=${id}`
function getapi(url){
fetch(url)
    .then(response => response.json())
    .then(data=> {
      console.log(data)
      getPoster(data.results, 20)
    })
    function getPoster(movies, nbrToShow){
      for(i=0; i<nbrToShow; i++){
        document.getElementById('category').innerHTML+=`<a href="./index.php?action=player&id=${movies[i].id}"><img id= "poster${i}" src="https://image.tmdb.org/t/p/w200/${movies[i].poster_path}" class="d-block" alt=""></a>`
      }
    }
    }
getapi(url)
</script>
<?php
include('footer.php')
?>