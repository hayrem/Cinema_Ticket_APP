<?php
require "models/seller_list_show.model.php";
require "models/list_show.model.php";


$showId = $_GET["movie_id"] ? $_GET["movie_id"] : null;
$showId = getShow ();
$getID = ($_GET['movie_id']);
$movies = getDetailMovie($getID);
$shows = notListShow($getID);
foreach ($movies as $movie);
// print_r ( $showId);

require("views/seller/edit_show.view.php");
