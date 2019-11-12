<?php
$title = 'Category';
include('header.php')
?>
<h1 id="movcat"></h1>

<div class="container">
<section id='category' class="d-flex flex-wrap justify-content-between"></section>
</div>

<script>
let categorie = "";
switch (id) {
    case 28:
        let categorie = "Action"
    break;
    case 12:
        let categorie = "Adventure"
    break;
    case 16:
        let categorie = "Animation"
    break;
    case 35:
        let categorie = "Comedy"
    break;
    case 80:
        let categorie = "Crime"
    break;
    case 99:
        let categorie = "Documentary"
    break;
    case 18:
        let categorie = "Drama"
    break;
    case 10751:
        let categorie = "Family"
    break;
    case 14:
        let categorie = "Fantasy"
    break;
    case 36:
        let categorie = "History"
    break;
    case 27:
        let categorie = "Horror"
    break;
    case 10402:
        let categorie = "Music"
    break;
  
}
console.log("hello");

document.getElementById("movcat").innerHTML = categorie
let id = '<?= $_GET['id']?>'

let url = `https://api.themoviedb.org/3/discover/movie?api_key=a85ec5f726223d34a1135bd216c3bd56&with_genres=${id}`

getapi(url)
</script>
<?php
include('footer.php')
?>