<?php
require("database/database.php");
function sellerShowMovie() : array
{
    global $connection;
    $statement = $connection->prepare("SELECT * FROM movies 
    INNER JOIN shows ON movies.movie_id = shows.show_id 
    INNER JOIN cinema_halls ON shows.cinema_hall_id = cinema_halls.cinema_hall_id;");
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}

$id = isset($_GET["movie_id"]) ? $_GET["movie_id"] :null;
function deleteShow(int $id)
{
    global $connection;
    $statement = $connection->prepare("DELETE FROM movies WHERE movie_id = :id");
    $statement->execute([':id'=> $id]);
    
}
