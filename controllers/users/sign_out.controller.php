<?php 
session_start();
// session_unset();

// delete $_COOKIE
setcookie('firstName', '', time() - 1, '/');
setcookie('lastName', '', time() - 1, '/');
setcookie('email', '', time() - 1, '/');

session_destroy();

header("Location:/");