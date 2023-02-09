<?php
echo 'Hello World';
require "views/partials/head.php";
require "models/delete_show.model.php";
$sellerShows = sellerShowMovie() ;
require("views/seller/setting_movie.view.php");
if (isset($_GET['submit'])){
    $id = $_POST['movie_id'];
    $delete = deleteShow($id);
}