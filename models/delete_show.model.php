<?php
require("../../database/database.php");
echo "hi";
function sellerShowMovie() : array
{
    global $connection;
    $statement = $connection->prepare("SELECT * FROM movies 
    INNER JOIN shows ON movies.movie_id = shows.show_id 
    INNER JOIN cinema_halls ON shows.cinema_hall_id = cinema_halls.cinema_hall_id;");
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}




function deleteShow(int $id)
{
    global $connection;
    $statement = $connection->prepare("DELETE FROM movies WHERE movie_id = :id");
    $statement->execute([':movie_id'=> $id]);
}
