<?php

require "views/partials/head.php";
require "models/delete_show.model.php";
require "models/seller_list_show.model.php";


$sellerShows = getMovie();

if (isset($_GET['submit'])){
    $id = $_POST['movie_id'];
    $delete = deleteShow($id);
}


require("views/seller/setting_movie.view.php");