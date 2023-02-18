<?php
require "models/seller_list_show.model.php";
require "models/list_show.model.php";


$showId = $_GET["movie_id"] ? $_GET["movie_id"] : null;

$getID = ($_GET['movie_id']);
$movies = getDetailMovieFromHall($getID);
$movie = TRUE;
if (empty($movies)){
    $movies = getDetailMovie($getID);
    $movie = FALSE;
}
$shows = notListShow($getID);

require("views/seller/edit_show.view.php");

