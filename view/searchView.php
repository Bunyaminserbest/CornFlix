<?php 
$title='search';
include('header.php')
?>

<section id="movie"></section>

<script>
    console.log('script')
    var query = '<?php echo $_GET['query'] ?>' 
function getSearch(query){
    console.log('getSearch')
fetch(`https://api.themoviedb.org/3/search/movie?api_key=a85ec5f726223d34a1135bd216c3bd56&language=en-US&query=${query}&page=1&include_adult=false`)
.then(response => response.json())
    .then(data=> {
      Search(data.results,20)
      console.log(data.result, "1")
    })
    function Search(movies, nbrToShow,){
        console.log('search')
        for (i=0; i<nbrToShow; i++){
        
        document.getElementById("movie").innerHTML += `<a href="./index.php?action=player&id=${movies[i].id}"><img src="https://image.tmdb.org/t/p/w200/${movies[i].poster_path}"></a>`
        }
    }}
    getSearch(query)
</script>
<?php include('footer.php')?>