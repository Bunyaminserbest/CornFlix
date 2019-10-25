<?php
  $title = 'Contact-us';
  include('header.php')

?>


<div class="p-5">

<h1><i class="fas fa-user-alt "></i>Profil</h1>
<p>le titre de la page est : <?= $title?></p>
<hr>
  username :
  name :
  lastname :
  email :

    <button class="my-2 my-sm-0 searchBtn" type="mail">Change mail adress</button>
    <button class="my-2 my-sm-0 searchBtn" type="password">Change password</button>
</div>
</div>



<?php
include('footer.php')
?>