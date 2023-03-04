<?php 
    require "views/partials/head.php";
    require "views/partials/nav.php";
?>
    <h1 class="mt-4 ms-4 mb-4" style="color:aliceblue">Don't have tiket</h1>
<?php
    require "models/ticket.model.php";
    
    $deading = "cinema";
    $tickets = showTicket();
    
    // print_r ($tickets);

    require "views/ticket/ticket.view.php";

?>
<script src="../../views/js/print_ticket.js"></script>
