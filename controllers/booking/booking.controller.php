<?php

require "views/partials/head.php";
require "views/partials/nav.php";
require ('models/list_show.model.php');
require ('models/booking.model.php');
require "controllers/search/search.controller.php";

$getID = ($_GET['movie_id']);
$getTitle = ($_GET['title']);
$movies = getDetailMovie($getID);
$shows = notListShow($getID);
$date_show = ($_GET['date_show']);
$hall = ($_GET['hall_id']);


// require("views/detail_movies/detail_movie.view.php");
require "views/booking/booking.view.php";
require "views/partials/footer.php";
