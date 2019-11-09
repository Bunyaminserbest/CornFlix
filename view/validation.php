<?php
include("header.php");

/* var_dump($prixCode); */
$prixTotal=0;
$prixQty = 0;
$prixCode = 0;
$qty = 0;
$prixfinal = 0;
?>

<script>let test2 = [];
  let test ='';</script>
<?php
$i=0;
foreach($result as $row){?>

<script>
<?="test =".$row['movie_id']."
test2.push(test)"; ?>
</script>
<?php
$qty += intval(($_POST['quantiter']));}
// echo "Quantity: " . $qty;
?>



<?php
/* if promo code empty */
if($_POST['promo'] != 'MikeEstTropCool') {
    if ($qty < 5) {
        /* delivery */
        $prixTotal = $qty *10 + $_POST['payslist'];
        $prixfinal = $prixTotal;
    }else {
       /* quantity */
        $prixTotal = $qty *10 + $_POST['payslist'];
        $prixQty = $prixTotal - ($prixTotal *0.05);
        $prixfinal = $prixQty;
    }
/* if promo code */
} else {
    if(($_POST['promo'] === 'MikeEstTropCool') AND ($_POST['payslist'] == 0)) {
        $prixTotal = $qty *10 + $_POST['payslist'];
        $prixQty = $prixTotal - ($prixTotal *0.05) ; 
        $prixCode= $prixQty -($prixQty*0.15);
        $prixfinal = $prixCode;
    }else{
        $prixTotal = $qty *10 + $_POST['payslist'];
        $prixQty = $prixTotal - ($prixTotal *0.05) ; 
        $prixCode= $prixQty -($prixQty*0.10);
        $prixfinal = $prixCode;
    }
}?>
<div class="containerprix">
    <div class="boxprixfinal">
        <p>Vous avez validé votre commande de <?= $qty ?> articles</p>
        <p>Le prix total est de <?= $prixfinal ?> €<p>
        <p>Vous pouvez passer au paiement ci-dessous</p>
    </div>
    <div class="btn btn-danger buttonpaypal">
        <a href="https://www.paypal.com/fr/home">Paiement</a>
    </div>
</div>

<?php
include("footer.php");
?>