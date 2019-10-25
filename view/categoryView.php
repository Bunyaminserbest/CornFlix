<?php
$title = 'Category';
include('header.php')
?>
<h1>Movies category</h1>
<section id='category'></section>
<script>
let id = '<?= $_GET['id']?>'
console.log(id)
fetch(`https://api.themoviedb.org/3/discover/movie?api_key=a85ec5f726223d34a1135bd216c3bd56&with_genres=${id}`)
    .then(response => response.json())
    .then(data=> {
      console.log(data)
      getPoster(data.results)
    })
    function getPoster(movies){
      for(i=0; i<20; i++){
        document.getElementById('category').innerHTML+=`<a href="./index.php?action=player&id=${movies[i].id}"><img id= "poster${i}" src="https://image.tmdb.org/t/p/w200/${movies[i].poster_path}" class="d-block" alt=""></a>`
      }
    }
</script>
<?php
include('footer.php')
?>