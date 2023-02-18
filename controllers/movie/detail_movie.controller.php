<?php

require "views/partials/head.php";
require "views/partials/nav.php";
require ('models/list_show.model.php');
require "controllers/search/search.controller.php";

$getID = ($_GET['movie_id']);
$movies = getDetailMovieFromHall($getID);
if (empty($movies)){
    $movies = getDetailMovie($getID);
}
$shows = notListShow($getID);
$posts = $shows;
require("views/detail_movies/detail_movie.view.php");
require("views/home/index.view.php");
require "views/partials/footer.php";

?>
