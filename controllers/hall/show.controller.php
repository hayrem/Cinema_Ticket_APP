<?php 
    require "views/partials/head.php";
    require "views/partials/nav.php";
    require ('models/list_show.model.php');
    $ID = ($_GET['cinema_hall_id']);
    $hallShows = hallShow($ID);
    $nameHalls = getNameHall($ID);

    require "views/hall/show.view.php";
    // require "views/cinema/cinema.view.php";
?>
