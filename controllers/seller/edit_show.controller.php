<?php
require "models/seller_list_show.model.php";
$showId = $_GET["movie_id"] ? $_GET["movie_id"] : null;
$showId = getShow ();

// print_r ( $showId);

require("views/seller/edit_show.view.php");

