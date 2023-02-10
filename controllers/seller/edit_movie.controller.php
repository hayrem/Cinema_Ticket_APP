
<?php

$movieId = $_GET["movie_id"] ? $_GET["movie_id"] : null;

if (isset($movieId)){
    require "models/seller_list_show.model.php";
    $editMovie = getMovieId($movieId);
    require "views/seller/edit_movie.view.php";
}



?>