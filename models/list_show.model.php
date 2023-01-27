<?php
require("database/database.php");
function getMovie($search) : array
{
    global $connection;
    $statement = $connection->prepare("select title,released,image,duration from movies where title like '%{$search}%'");
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}
?>