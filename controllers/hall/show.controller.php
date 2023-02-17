<?php 
    require "views/partials/head.php";
    require "views/partials/nav.php";
    require "models/hall_show.model.php";
    
    $ID = ($_GET['hall_id']);
    $hallShows = hallShow($ID);
    $nameHalls = getNameHall($ID);

    if(array_key_exists('movie_id',$_GET)){
        // echo 'query exists';
        $movieId = $_GET['movie_id'];
        require "views/detail_movies/detail_movie.view.php";

    }

    require "views/hall/show.view.php";
    // require "views/cinema/cinema.view.php";
?>
