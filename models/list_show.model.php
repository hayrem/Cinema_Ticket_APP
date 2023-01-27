<?php
require("database/database.php");
function getMovie(string $search) : array
{
    global $connection;
    $statement = $connection->prepare("select title,released,image,duration from movies where title like '%{$search}%'");
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}


function showMovie() : array
{
    global $connection;
    $statement = $connection->prepare("select movie_id, title,released,image,duration from movies");
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}
$shows=showMovie();


function getDetailMovie(int $getID) : array
{
    global $connection;
    $statement = $connection->prepare("select * from movies where movie_id = :movie_id");
    $statement->execute([':movie_id'=> $getID]);
    return $statement->fetchAll(PDO::FETCH_ASSOC);
 
}
?>