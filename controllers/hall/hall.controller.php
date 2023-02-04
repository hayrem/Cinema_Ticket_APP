
<?php 
    require "views/partials/head.php";
    require "views/partials/nav.php";
    require ('models/list_show.model.php');
    $halls = getDetahall();

    require "views/hall/hall.view.php";

?>

