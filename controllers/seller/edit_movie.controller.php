<?php

$movie_id = $_GET["movie_id"] ? $_GET["movie_id"] : null;

if (isset($movie_id)){
        require "models/seller_list_show.model.php";
        $editMovie = getMovieId($movie_id);
        require "views/seller/edit_movie.view.php";
    }

    // print_r($editMovie);
       
       

?>