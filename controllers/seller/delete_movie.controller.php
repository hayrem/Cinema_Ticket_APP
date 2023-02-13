<?php
require "views/partials/head.php";
require "models/seller_list_show.model.php";
require "models/delete_show.model.php";

$sellerShows = sellerShowMovie();

$movie_id = $_GET['movie_id'];
if (isset($movie_id))
{
    $statement = $connection->prepare("delete from movies where movie_id = :movie_id");
    $statement->execute([':movie_id' => $movie_id]);

    header('Location:/seller/setting');
}

require("views/seller/setting_movie.view.php");
