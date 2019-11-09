<?php 
$title='search';
include('header.php')
?>
<!--DATE FILTER-->
<form action="" method="get" class="row py-5 px-4 ">
<input type="hidden" name="action" value="search">
<input type="hidden" name="query" value="<?=$_GET['query']?>">
<label for="year">Year </label>
<input type="text" name="year" value=""><br>
<button type="submit" class="btn btn-danger">Filtrer</button>
</form>
<section id="movie"class="mx-5"></section>


<script>
//API SEARCH FILTER  
    var query = '<?php echo $_GET['query'] ?>' 
    <?php if(isset($_GET['year'])){
       
       $url = "https://api.themoviedb.org/3/search/movie?api_key=a85ec5f726223d34a1135bd216c3bd56&language=en-US&query=".$_GET['query']."&page=1&include_adult=false&year=".$_GET['year'];
       }else{
           $url= "https://api.themoviedb.org/3/search/movie?api_key=a85ec5f726223d34a1135bd216c3bd56&language=en-US&query=".$_GET['query']."&page=1&include_adult=false";
           }?>
    var url = '<?php echo $url ?>'
function getSearch(query, url){
   
fetch(url)
.then(response => response.json())
    .then(data=> {
      Search(data.results,20)
    })
    function Search(movies, nbrToShow,){
        
        for (i=0; i<nbrToShow; i++){
        
        document.getElementById("movie").innerHTML += `<a href="./index.php?action=player&id=${movies[i].id}" class="mx-2 my-2"><img class="poster my-2" src="https://image.tmdb.org/t/p/w200/${movies[i].poster_path}"></a>`
        }
    }}
    getSearch(query, url)
</script>
<?php include('footer.php')?>