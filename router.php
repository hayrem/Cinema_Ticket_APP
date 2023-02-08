<?php
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/' => 'controllers/home/index.controller.php',
    '/movie' => 'controllers/movie/movie.controller.php',
    '/cinema' => 'controllers/hall/hall.controller.php',
    '/ticket' => 'controllers/ticket/ticket.controller.php',
    '/sign_up' => 'controllers/users/sign_up.controller.php',
    '/sign_in' => 'controllers/users/sign_in.controller.php',
    '/reset' => 'controllers/users/reset_password.controller.php',
    '/manage_acc' => 'controllers/users/manage_acc.controller.php',
    '/detail' => 'controllers/movie/detail_movie.controller.php',
    '/delete' => 'controllers/seller/delete_seller.controller.php',
    '/setting' => 'controllers/seller/setting_movie.controller.php',
    // '/setting' => 'controllers/seller/home_movie.controller.php',
    '/seller' => 'controllers/seller/home_movie.controller.php',
    '/create' => 'controllers/seller/create_movie.controller.php',
    '/setting' => 'controllers/seller/setting_movie.controller.php',
    '/edit' => 'controllers/seller/edit_movie.controller.php',
];

if (array_key_exists($uri, $routes)) {
    require $routes[$uri];
} else {
   http_response_code(404);
   require 'views/errors/404.php';
   die();
}