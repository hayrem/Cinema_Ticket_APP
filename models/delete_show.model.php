<?php
require("database/database.php");
function sellerShowMovie() : array
{
    global $connection;
    $statement = $connection->prepare("SELECT * FROM movies");
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}

$id = isset($_GET["movie_id"]) ? $_GET["movie_id"] :null;
function deleteShow(int $id)
{
    global $connection;
    $statement = $connection->prepare("DELETE FROM movies WHERE movie_id = :id");
    $statement->execute([':id'=> $id]);
    header("Location:/delete");
}
