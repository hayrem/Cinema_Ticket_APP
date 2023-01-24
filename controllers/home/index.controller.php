<?php

$heading = "Home page";

require "models/movie.model.php";

$shows =  getMovie($tilte,$duration,$released,$image);

require "views/home/index.view.php";

?>

