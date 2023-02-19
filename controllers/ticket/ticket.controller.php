<?php 
    require "views/partials/head.php";
    require "views/partials/nav.php";
    require "models/ticket.model.php";
    
    $deading = "cinema";
    $tickets = showTicket();
    
    // print_r ($tickets);

    require "views/ticket/ticket.view.php";

?>
<script src="../../views/js/print_ticket.js"></script>
