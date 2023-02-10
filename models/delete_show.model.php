<?php
require("database/database.php");

function sellerShowMovie() : array
{
    global $connection;
    $statement = $connection->prepare("SELECT * FROM movies");
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}



