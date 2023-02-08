<?php
echo 'sdasdfasdf';
require "views/partials/head.php";
require "models/delete_show.model.php";
$sellerShows = sellerShowMovie() ;
require("views/seller/setting_movie.view.php");
$id = $_POST['movie_id'];
if (isset($_GET['submit'])){
    $delete = deleteShow($id);
}