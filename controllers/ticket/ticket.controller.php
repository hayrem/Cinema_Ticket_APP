<?php 
    require "views/partials/head.php";
    require "views/partials/nav.php";
    require "models/ticket.model.php";
    $deading = "cinema";
    $tickets = showTicket();
    require "views/ticket/ticket.php";

?>
