<?php 
ob_start();
session_start(); 
$loggedIn = $_SESSION['loggedIn'] ?? false; // check if user is logged in


$username = 'admin';
$password = 'password';

function login(){
    session_regenerate_id(true);
    $_SESSION['loggedIn'] = true;
}

function logout(){
    $_SESSION = [];

    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000, $params['path'], $params['domain'], $params['secure'], $params['httponly']);

    session_destroy();
}

function auth($loggedIn){
    if(!$loggedIn){
        header('Location: /login');
        exit;
    }
}

?>