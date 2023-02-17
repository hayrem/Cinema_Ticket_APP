<?php
require "models/list_show.model.php";
require "controllers/search/search.controller.php";

$posts = postMovies();

require("views/seller/home.view.seller.php");