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
    '/hallShow' => 'controllers/hall/show.controller.php',
    '/contact' => 'controllers/contact_us/contact_us.controller.php',
    '/booking' => 'controllers/booking/booking.controller.php',
    '/payment' => 'controllers/booking/payment.controller.php',
    '/select_show_time' => 'controllers/booking/select_show_time.controller.php',

];
if (isset($_COOKIE['email'])){
    $userRole=$_COOKIE['userrole'];
    if($userRole === 'seller') {
        $routes['/seller'] = 'controllers/seller/home_movie.controller.php';
        $routes['/seller/setting'] = 'controllers/seller/setting_movie.controller.php';
        $routes['/seller/delete'] =  'controllers/seller/delete_movie.controller.php';
        $routes['/seller/edit'] =  'controllers/seller/edit_movie.controller.php';
        $routes['/seller/update'] =  'controllers/seller/update_movie.controller.php';
        $routes['/seller/create_show'] =  'controllers/seller/create_show_movie.controller.php';
        $routes['/seller/create_movie'] =  'controllers/seller/create_movie.controller.php';
        $routes['/seller/edit_show'] =  'controllers/seller/edit_show.controller.php';
        $routes['/seller/seller_show_edit'] =  'controllers/seller/seller_show_edit.controller.php';
    };
    
}

if (array_key_exists($uri, $routes)) {
    require $routes[$uri];
} else {
   http_response_code(404);
   require 'views/errors/404.php';
   die();
}