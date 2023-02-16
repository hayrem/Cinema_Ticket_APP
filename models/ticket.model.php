<?php
require "database/database.php";


function showTicket():array
{
    global $connection;
    $statement = $connection->prepare("SELECT * FROM booking");
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}