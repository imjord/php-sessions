<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    "/" => "./controllers/index.php",
    "/login" => "./controllers/login.php",
];




routesToController($uri, $routes);