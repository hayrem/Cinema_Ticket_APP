<?php
require "views/partials/head.php";
require "models/delete_show.model.php";
require "models/seller_list_show.model.php";
require "controllers/alert/alert.controller.php";


$sellerShows = sellerShowMovie();

if(array_key_exists('movie_id',$_GET)){
    // echo 'query exists';
    $movieId = $_GET['movie_id'];
}

// get without error is no URL parameter


if($_SERVER['REQUEST_METHOD'] == 'POST'){ 
        $moviePost = $_POST['postnow'];
        updatePost($moviePost,$movieId);
 }


require("views/seller/setting_movie.view.php");