<?php

$getID = ($_GET['movie_id']);
$movies = getDetailMovie($getID);
$shows = notListShow($getID);

require("views/seller/setting_movie.view.php");