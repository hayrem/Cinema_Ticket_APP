<?php
require("database/database.php");
function getMovie() : array
{
    global $connection;
    $statement = $connection->prepare("select title,released,image,duration from movies");
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}
$shows=getMovie();
?>