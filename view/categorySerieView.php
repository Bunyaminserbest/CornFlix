<?php
$title = 'Category';
include('header.php')
?>
<h1 class=" pt-3 pb-1" style="padding:3%; text-align:center; background-color:black">Series</h1>
<div class="container">
<section id='category' class="d-flex flex-wrap justify-content-between pt-2"></section>
</div>
<script>
let id = '<?= $_GET['id']?>'


let url = `https://api.themoviedb.org/3/discover/tv?api_key=a85ec5f726223d34a1135bd216c3bd56&with_genres=${id}`

getapiSerie(url)
</script>
<?php
include('footer.php')
?>