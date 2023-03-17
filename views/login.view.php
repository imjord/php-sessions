<?php
   require "controllers/sessions.php";
    require('partials/header.php');
    if ($loggedIn) {                             
        header('Location: /account');          
        exit;                                     
    }    
    $message = '';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // filter the input user to be exactly the same as 'admin'
        $user_username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
        $user_password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
        // check if the user input is the same as the admin

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
    <div class="form-container">
    <h1>LOGIN</h1>
    <h1 class="error"><?= $message ?></h1>
    <form  method="POST" action="/login">
        <input type="text" name="username" placeholder="username">
        <input type="password" name="password" placeholder="password">
        <input id="btn" type="submit" value="login">
    </form>
    <p>Username is "admin" and password is "password"</p>
</div>
    
</main>
<?php
    require('partials/footer.php');
?>