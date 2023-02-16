<?php

require "views/partials/head.php";
require "views/partials/nav.php";
require ('models/list_show.model.php');
require "controllers/search/search.controller.php";

$getID = ($_GET['movie_id']);
$movies = getDetailMovie($getID);
$shows = notListShow($getID);
foreach ($shows as $show);


// require("views/detail_movies/detail_movie.view.php");
require "views/booking/booking.view.php";
require "views/partials/footer.php";