<?php
require("database/database.php");

// function getMovie(){
//     global $connection;
//     $statement = $connection->prepare("select * from movies");
//     $statement->execute();
//     return $statement->fetchAll();

// }

function getMovieId(int $movieId):array
{
    global $connection;
    $statement = $connection->prepare('select * from movies where movie_id = :movie_id');
    $statement->execute([':movie_id' => $movieId]);
    return  $statement->fetch();
};


function read_seller_edit(string $title, string $description,string $released,string $language,string $genre,string $country, int $id) : bool
{
    global $connection;
    $statement = $connection->prepare("update movies set title = :title, description = :description,released = :released ,language = :language ,genre =:genre,country =:country where movie_id = :movie_id");
    $statement->execute([
        ':title' => $title,
        ':description' => $description,
        ':released' => $released,
        'language' => $language,
        'country' => $country,
        'genre' => $genre,
        ':movie_id' => $id

    ]);
    return $statement->rowCount() > 0;
}


// get data from table show 

function getDataTimeShow():array
{
    global $connection;
    $statement = $connection->prepare('select time_start from shows');
    $statement->execute();
    return  $statement->fetch();
}