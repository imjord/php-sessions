<?php
    require("controllers/sessions.php");

    require('partials/header.php');
    auth($loggedIn);
?>
<main>
    <h1>Hello <?= $username ?></h1>
</main>
<?php
    require('partials/footer.php');
?>