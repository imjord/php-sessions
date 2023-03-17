<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/styles.css">
    <title><?= $title ?></title>
</head>
<body>
<nav>
    <div>
    <ul>
        <li><a href="/">Home</a></li>
    </ul>
    </div>
    <div>
    <ul>
        <?= $loggedIn ? '<li><a href="/account">Account</a></li> <li><a href="/logout">Logout</a></li>' : '<li><a href="/login">Login</a></li>' ?>
    </ul>
</nav>

