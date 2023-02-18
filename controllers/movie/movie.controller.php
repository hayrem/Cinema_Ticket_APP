
<?php 

    $heading = "Movies page";
    require "views/partials/head.php";
    require "views/partials/nav.php";
    require "controllers/alert/alert.controller.php";
    require "models/list_show.model.php";
    $posts = postMovies();
    require "controllers/search/search.controller.php";
    require "views/movie/movie.view.php";
    require "views/home/index.view.php";
    require "views/partials/footer.php";

?>
