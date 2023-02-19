<?php

require "views/partials/head.php";
require "views/partials/nav.php";
require ('models/list_show.model.php');
require "controllers/search/search.controller.php";

$getID = ($_GET['movie_id']);
$movies = getDetailMovieFromHall($getID);
// print_r($movies);
$movie = TRUE;
if (empty($movies)){
    $movies = getDetailMovie($getID);
    $movie = FALSE;
}
$shows = notListShow($getID);

require("views/detail_movies/detail_movie.view.php");
// require "views/booking/booking.view.php";
if ($movie){
    require "views/booking/select_show_time.view.php";
}

require "views/partials/footer.php";