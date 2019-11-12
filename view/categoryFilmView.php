<?php
$title = 'Category';
include('header.php')
?>
<h1 id="movcat" class=" pt-3 pb-1" style="padding:3%; text-align:center; background-color:black"></h1>
<hr class="container">
<div class="container">
<section id='category' class="d-flex flex-wrap justify-content-between "></section>
</div>
<script>
/*SET CATEGORY NAME ON PLAYER */
let id = '<?= $_GET['id']?>'
if (id=="28") {
    categorie = "Action";}
else if (id=="12"){
    categorie = "Adventure"}
else if (id=="16"){
    categorie = "Animation"}
else if (id=="35"){
    categorie = "Comedy"}
else if (id==80){
    categorie = "Crime"}
else if (id==99){
    categorie = "Documentary"}
else if (id==18){
    categorie = "Drama"}
else if (id==10751){
    categorie = "Family"}
else if (id==14){
    categorie = "Fantasy"}
 else if (id==36){
    categorie = "History"}
else if (id==27){
    categorie = "Horror"}
else if (id==10402){
    categorie = "Music"}
document.getElementById("movcat").innerHTML = categorie


let url = `https://api.themoviedb.org/3/discover/movie?api_key=a85ec5f726223d34a1135bd216c3bd56&with_genres=${id}`

getapi(url)
</script>
<?php
include('footer.php')
?>