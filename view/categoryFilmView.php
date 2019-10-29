<?php
$title = 'Category';
include('header.php')
?>
<h1>Movies category</h1>
<div class="container">
<section id='category' class="d-flex flex-wrap justify-content-between pt-2"></section>
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