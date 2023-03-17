<?php
   require "controllers/sessions.php";
    require('partials/header.php');
    if ($loggedIn) {                             
        header('Location: /account');          
        exit;                                     
    }    
    $message = '';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $user_username = $_POST['username'];
        $user_password = $_POST['password'];

            if($user_username == $username && $user_password == $password){
                login();
                header('Location: /');
                exit;
            } else {
                $message = 'Incorrect username or password';
            }
    }
?>
<main>
    <h1>login</h1>
    <h1><?= $message ?></h1>
    <form  method="POST" action="/login">
        <input type="text" name="username" placeholder="username">
        <input type="password" name="password" placeholder="password">
        <input type="submit" value="login">
    </form>
    <p>Username is "admin" and password is "password"</p>
</main>
<?php
    require('partials/footer.php');
?>