
<?php


require "models/seller_list_show.model.php";

$shows = getMovie();

$movieId = $_GET["movie_id"] ? $_GET["movie_id"] : null;

if (isset($movieId)){
    $editMovie = getMovieId($movieId);
    require "views/seller/edit_movie.view.php";
    print_r($editMovie);
}


?>