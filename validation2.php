<?php
include("header.php");

/* var_dump($prixCode); */
$prixTotal=0;
$prixQty = 0;
$prixCode = 0;
$qty = 0;
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
echo "Quantity: " . $qty;
?>



<?php
/* if promo code empty */
if($_POST['promo'] != 'MikeEstTropCool') {
    if ($qty < 5) {
        /* delivery */
        $prixTotal = $qty *10 + $_POST['payslist'];
        echo "Total price of your order is: " . $prixTotal. " euro";
    }else {
       /* quantity */
       $prixTotal = $qty *10 + $_POST['payslist'];
        echo  "<br> Total price of your order is: " .$prixQty = $prixTotal - ($prixTotal *0.05) . " euro";
    }
/* if promo code */
} else {
    if(($_POST['promo'] === 'MikeEstTropCool') AND ($_POST['payslist'] == 0)) {
        $prixTotal = $qty *10 + $_POST['payslist'];
        $prixQty = $prixTotal - ($prixTotal *0.05) ; 
        echo "<br> Total price of your order is: ". $prixCode= $prixQty -($prixQty*0.15). " euro";
    }else{
        $prixTotal = $qty *10 + $_POST['payslist'];
        $prixQty = $prixTotal - ($prixTotal *0.05) ; 
        echo "<br> Total price of your order is: ". $prixCode= $prixQty -($prixQty*0.10) . " euro";
    }
}



include("footer.php");
?>