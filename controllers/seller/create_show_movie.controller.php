
<?php 
    require ('models/list_show.model.php');

    $halls = getDetahall();

    $shows = showMovie();
    
    require("views/seller/create_show.movie.view.php");

?>