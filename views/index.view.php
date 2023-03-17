<?php
    require "controllers/sessions.php";

    require('partials/header.php');
    
?>
<main>
    <?php if ($loggedIn) : ?>
        <div class="home">
            <h1>You are now logged in!</h1>
            <p>delete your session history and you will be logged out or hit logout</p>
        </div>
    <?php else : ?>
        <div class="home">
            <h1>Welcome to imjord sessions</h1>
            <p>you can login and logout.</p>
            <p>I made this to learn php sessions.</p>
        </div>
    <?php endif; ?>
</main>
<?php
    require('partials/footer.php');
?>