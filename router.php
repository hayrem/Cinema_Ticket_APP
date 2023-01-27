<?php
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/' => 'controllers/home/index.controller.php',
    '/movie' => 'controllers/movie/movie.controller.php',
    '/cinema' => 'controllers/cinema/cinema.controller.php',
    '/ticket' => 'controllers/ticket/ticket.controller.php',
    '/sign_up' => 'controllers/users/sign_up.controller.php',
    '/sign_in' => 'controllers/users/sign_in.controller.php',
    '/manage_acc' => 'controllers/users/manage_acc.controller.php',

];

if (array_key_exists($uri, $routes)) {
    require $routes[$uri];
} else {
   http_response_code(404);
   require 'views/errors/404.php';
   die();
}