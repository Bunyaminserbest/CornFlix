<?php
$title = 'Player';
include('header.php')
?>

H1>P<LAYER Film <?=$_GET['id']?></H1>
<div id="player" class="container">Hello</div>
<div id="comments"></div>
<div id="user"></div>
<div id="commen"></div>

<!-- Comment Form -->

<h2>Commentaires</h2>

<form action="index.php?action=addComment&amp;id=<?= $post['id_comm'] ?>" method="post">
    <div>
        <label for="user_name">User name</label><br />
        <input type="text" id="user_name" name="user_name" />
    </div>
    <div>
        <label for="comment">Comment</label><br />
        <textarea id="comment" name="comment"></textarea>
    </div>
    <div>
        <input type="submit" />
    </div>
</form>


<script>
let movieId = '<?=$_GET['id']?>'
console.log(movieId)
fetch(`https://api.themoviedb.org/3/movie/${movieId}/videos?api_key=a85ec5f726223d34a1135bd216c3bd56&language=en-US`)
    .then(response => response.json())
    .then(data=> {
      
      showTrailer(data.results)
    })
    function showTrailer(movie){
        document.getElementById("player").innerHTML += `<iframe width="100%" height="600px" src="http://www.youtube.com/embed/${movie[0].key}"frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>`
        
    }

    fetch(`https://api.themoviedb.org/3/movie/${movieId}/reviews?api_key=a85ec5f726223d34a1135bd216c3bd56&language=en-US&page=1`)
        .then(response => response.json())
        .then(data =>{
            console.log(data)
            showComments(data.results)
        })
    function showComments(comment){
        document.getElementById("user").innerHTML += `<h3>${comment[1].author}</h3>`
        document.getElementById("commen").innerHTML += `<p>${comment[1].content}</p>`
    }
</script>

<?php
include('footer.php')
?>