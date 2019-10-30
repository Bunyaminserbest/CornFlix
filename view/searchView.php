<?php 
$title='search';
include('header.php')
?>
<form action="" method="get">
<input type="hidden" name="action" value="search">
<input type="hidden" name="query" value="<?=$_GET['query']?>">
<input type="checkbox" name="category" value="28">Action<br>
<input type="checkbox" name="category" value="12">Adventure<br>
<input type="checkbox" name="category" value="16">Animation<br>
<input type="checkbox" name="category" value="35">Comedy<br>
<input type="checkbox" name="category" value="80">Crime<br>
<input type="checkbox" name="category" value="99">Documentary<br>
<input type="checkbox" name="category" value="18">Drama<br>
<input type="checkbox" name="category" value="10751">Familly<br>
<input type="checkbox" name="category" value="14">Fantasy<br>
<input type="checkbox" name="category" value="36">History<br>
<input type="checkbox" name="category" value="27">Horror<br>
<input type="checkbox" name="category" value="10402">Music<br>
<button type="submit" class="btn btn-danger">Filtrer</button>
</form>
<section id="movie"></section>


<script>
    
    var query = '<?php echo $_GET['query'] ?>' 
    <?php if(isset($_GET['category'])){
       $genre = "&with_genres=".$_GET['category'];
       }else{
           $genre= "";
           }?>
function getSearch(query){
   
fetch(`https://api.themoviedb.org/3/search/movie?api_key=a85ec5f726223d34a1135bd216c3bd56&language=en-US&query=${query}&page=1&include_adult=false`)
.then(response => response.json())
    .then(data=> {
      Search(data.results,20)
      console.log(data.result, "1")
    })
    function Search(movies, nbrToShow,){
        
        for (i=0; i<nbrToShow; i++){
        
        document.getElementById("movie").innerHTML += `<a href="./index.php?action=player&id=${movies[i].id}"><img src="https://image.tmdb.org/t/p/w200/${movies[i].poster_path}"></a>`
        }
    }}
    getSearch(query)
</script>
<?php include('footer.php')?>