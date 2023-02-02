<?php
require("database/database.php");
// seach fucntion 
function getMovie(string $search) : array
{
    global $connection;
    $statement = $connection->prepare("select title,released,image,duration,movie_id from movies where title like '%{$search}%' or released like '%{$search}%'");
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}

// details fucntion
function showMovie() : array
{
    global $connection;
    $statement = $connection->prepare("select movie_id, title,released,image,duration from movies");
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}
$shows=showMovie();

// get id movie
function getDetailMovie(int $getID) : array
{
    global $connection;
    $statement = $connection->prepare("select * from movies where movie_id = :movie_id");
    $statement->execute([':movie_id'=> $getID]);
    return $statement->fetchAll(PDO::FETCH_ASSOC);
 
}

//cinema detail fuction 
function getDetaCinemas() : array
{
    global $connection;
    $statement = $connection->prepare("select * from cinemas");
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
 
}

// $cinemas = getDetaCinemas();
// echo $cinemas;
function notListShow(int $id) : array
{
    global $connection;
    $statement = $connection->prepare("select * from movies where movie_id != :id");
    $statement->execute([':id'=> $id]);
    return $statement->fetchAll(PDO::FETCH_ASSOC);

}

?>