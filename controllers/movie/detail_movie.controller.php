<?php
// require '../../utils/url.php';
require "views/partials/head.php";
require "views/partials/nav.php";
require ('models/list_show.model.php');
require "controllers/search/search.controller.php";

$getID = ($_GET['movie_id']);
$movies = getDetailMovie($getID);
$shows = notListShow($getID);

<<<<<<< HEAD

=======
// print_r($shows);
>>>>>>> f64288685026534bba8e1a6741a0d0c7bbf9b13e
require("views/detail_movies/detail_movie.view.php");

// require("views/home/index.view.php");
require "views/partials/footer.php";

?>
