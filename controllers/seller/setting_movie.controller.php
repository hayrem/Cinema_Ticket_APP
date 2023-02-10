<?php
require "views/partials/head.php";
require "models/delete_show.model.php";
require "models/seller_list_show.model.php";


$sellerShows = sellerShowMovie();


require("views/seller/setting_movie.view.php");