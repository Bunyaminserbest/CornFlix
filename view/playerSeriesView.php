<?php
$title = 'Player Series';
include('header.php')
?>

<H1>PLAYER Film <?=$_GET['id']?></H1>
<div id="player">Hello</div>
<div id="comments"></div>
<div id="user"></div>
<div id="commen"></div>

<!-- Comments -->

<h2>Commentaires</h2>
<?php
//include('./controller/controller.php');

$comments = getCommentsSerie($_GET['id']);
while ($data = $comments->fetch())
{
?>
    <h3><?=nl2br(htmlspecialchars($data['username'])); ?></h3>
    <p><?=nl2br(htmlspecialchars($data['comment']));} ?></p>
<p></p>


<form action="index.php?action=addComment&id=<?= $_GET['id'] ?>" method="post">
    <div>
        <label for="username">Username</label><br />
        <input type="text" id="username" name="username" />
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
let serieId = '<?=$_GET['id']?>'
console.log(serieId)
fetch(`https://api.themoviedb.org/3/tv/${serieId}/videos?api_key=a85ec5f726223d34a1135bd216c3bd56&language=en-US`)
    .then(response => response.json())
    .then(data=> {
      
      showTrailer(data.results)
    })
    function showTrailer(serie){
        document.getElementById("player").innerHTML += `<iframe width="1600" height="1200" src="http://www.youtube.com/embed/${serie[0].key}"frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>`
        
    }

    fetch(`https://api.themoviedb.org/3/tv/${serieId}/reviews?api_key=a85ec5f726223d34a1135bd216c3bd56&language=en-US&page=1`)
        .then(response => response.json())
        .then(data =>{
            console.log(data)
            showComments(data.results)
        })
    function showComments(comment){
        document.getElementById("user").innerHTML += `<h3>${comment[0].author}</h3>`
        document.getElementById("commen").innerHTML += `<p>${comment[0].content}</p>`
    }
</script>






<?php
include('footer.php')
?>