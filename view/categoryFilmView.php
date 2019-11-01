<?php
$title = 'Category';
include('header.php')
?>
<h1 class=" pt-3 pb-1" style="padding:3%; text-align:center; background-color:black">Movies category</h1>
<hr class="container">
<div class="container">
<section id='category' class="d-flex flex-wrap justify-content-between "></section>
</div>
<script>
let id = '<?= $_GET['id']?>'
console.log(id)
let url = `https://api.themoviedb.org/3/discover/movie?api_key=a85ec5f726223d34a1135bd216c3bd56&with_genres=${id}`

getapi(url)
</script>
<?php
include('footer.php')
?>