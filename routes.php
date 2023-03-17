<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    "/" => "./controllers/index.php",
    "/login" => "./controllers/login.php",
    "/account" => "./controllers/account.php",
    "/logout" => "./controllers/logout.php",
];




routesToController($uri, $routes);