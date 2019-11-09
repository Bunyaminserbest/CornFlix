<?php 
    if(isset($_POST['id'])){
        $db = new PDO('mysql:host=localhost;dbname=a70j0_bdd_ehanon', 'root', 'root'); 
        $pdoStat = $db->prepare('INSERT INTO shoppingcart VALUES (NULL, :id_user, :id_movie, :prix, :quantiter)');
        $pdoStat -> bindValue(':id_user', $_SESSION['user_id'], PDO::PARAM_STR);
        $pdoStat -> bindValue(':id_movie', $_GET['id'], PDO::PARAM_STR);
        $pdoStat -> bindValue(':prix', "10", PDO::PARAM_STR);
        $pdoStat -> bindValue(':quantiter', $_POST['quantiter'], PDO::PARAM_STR);
        $insertIsOk = $pdoStat->execute();
       
        
    }
    ?>
<?php 
// if(empty($_SESSION['panier'])){
//     $_SESSION['panier'] = array($_GET['id']);
// }else{
//     array_push($_SESSION['panier'], $_GET['id']);
// }
// var_dump($_SESSION['panier']);

?>
<?php
$title = 'Player';
include('header.php');
?>

<H1 id="title" style="padding:3%; text-align:center; background-color:black"></H1>
<div id="player" class="container"></div>


<!-- Comments -->
<div class="container">
    <!-- Place pour le panier -->

<form action="?action=home" method="POST">
<input type="number" min="1" max="9" value="1" name="quantiter">
<button class="panierBtn" type="submit" name="id">Ajouter au panier</button>
</form>

<!-- Fin de l'ajout au panier -->
<hr>
<h2 >Commentaires</h2>
<hr>

<?php
//include('./controller/controller.php');
$comments = getComments($_GET['id']);
while ($data = $comments->fetch())
{
?>
<div>
<div class="d-flex align-items-baseline">
    <h3 class="mr-2"><?=nl2br(htmlspecialchars($data['username'])); ?></h3>
    <em> le <?= $data['comment_date_fr']; ?></em>
</div>
    <p><?=nl2br(htmlspecialchars($data['comment']));} ?>
    
    
</p>
</div>

<form action="index.php?action=addComment&id=<?= $_GET['id'] ?>" method="post" class="inputComsForm">
    
    <div >
        <label for="comment">Comment</label><br />
        <textarea id="comment" class="comInput" name="comment"></textarea>
    </div>
    <div>
        <input type="submit" />
    </div>
</form>
</div>




<script>
let movieId = '<?=$_GET['id']?>'
console.log(movieId)
fetch(`https://api.themoviedb.org/3/movie/${movieId}/videos?api_key=a85ec5f726223d34a1135bd216c3bd56&language=en-US`)
    .then(response => response.json())
    .then(data=> {
      showTrailer(data.results)
      document.getElementById("title").innerHTML = data.results[0].name
    })
    function showTrailer(movie){
        console.log(movie[0].name)
        document.getElementById("player").innerHTML += `<iframe width="100%" height="600px" src="http://www.youtube.com/embed/${movie[0].key}"frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>`
        
    }

    /*fetch(`https://api.themoviedb.org/3/movie/${movieId}/reviews?api_key=a85ec5f726223d34a1135bd216c3bd56&language=en-US&page=1`)
        .then(response => response.json())
        .then(data =>{
            console.log(data)
            showComments(data.results)
        })
    function showComments(comment){
        document.getElementById("user").innerHTML += `<h3>${comment[1].author}</h3>`
        document.getElementById("commen").innerHTML += `<p>${comment[1].content}</p>`
    }*/
  
</script>

<?php
include('footer.php')
?>