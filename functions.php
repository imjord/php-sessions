<?php 

// function url($value){
//     if($_SERVER['REQUEST_URI'] == $value){
//         echo "bg-gray-900 text-white";
//     } else {
//         echo "text-gray-300";
//     }
// }

function abort($code = 404){
    http_response_code($code);
    require "controllers/404.php";
    exit;
}


function routesToController($uri, $routes){
    if(array_key_exists($uri, $routes)){
        require $routes[$uri];
    } else {
        abort();
    }
}
