<?php 
    require "views/partials/head.php";
    require "views/partials/nav.php";
    require "models/hall_show.model.php";
    require "models/list_show.model.php";
    
    $ID = ($_GET['hall_id']);
    $hallShows = hallShow($ID);

    print_r($hallShows);
    $nameHalls = getNameHall($ID);
    

    if(array_key_exists('movie_id',$_GET)){
        $movieId = $_GET['movie_id'];
        $movies = getDetailMovie($getID);
        require "views/detail_movies/detail_movie.view.php";

    }

    require "views/hall/show.view.php";
?>
