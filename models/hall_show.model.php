<?php
require("database/database.php");
//cinema detail fuction 
function getDetahall() : array
{
    global $connection;
    $statement = $connection->prepare("SELECT * FROM halls");
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
 
}

// function get hallShows
function hallShow(int $ID) : array
{
    global $connection;
    $statement = $connection->prepare("SELECT movies.movie_id, movies.post,movies.title, movies.description, movies.image, shows.time_start, shows.show_id, shows.date_show, halls.hall_name, halls.total_seat  FROM shows 
    INNER JOIN halls ON shows.hall_id = halls.hall_id 
    INNER JOIN movies ON shows.movie_id = movies.movie_id
    WHERE halls.hall_id = :hall_id");
    $statement->execute([':hall_id'=> $ID]);
    return $statement->fetchAll(PDO::FETCH_ASSOC);
};

// function get name hall

function getNameHall(int $ID) : array
{
    global $connection;
    $statement = $connection->prepare("SELECT * FROM halls 
    WHERE halls.hall_id = :hall_id");
    $statement->execute([':hall_id'=> $ID]);
    return $statement->fetchAll(PDO::FETCH_ASSOC);
};


