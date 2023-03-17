<?php
    require("controllers/sessions.php");

    require('partials/header.php');
    auth($loggedIn);
?>
<main>
    <div class="home">
    <h1>Hello <?= $username ?></h1>
</div>
   
</main>
<?php
    require('partials/footer.php');
?>