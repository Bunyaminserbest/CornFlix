<?php
$title = 'Category';
include('header.php')
?>
<h1>Movies category</h1>
<section id='category'></section>
<script>
let id = '<?= $_GET['id']?>'
console.log(id)
let url = `https://api.themoviedb.org/3/discover/tv?api_key=a85ec5f726223d34a1135bd216c3bd56&with_genres=${id}`

getapi(url)
</script>
<?php
include('footer.php')
?>