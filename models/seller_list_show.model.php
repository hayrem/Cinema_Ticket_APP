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
    $statement = $connection->prepare('SELECT * FROM movies WHERE movie_id = :movie_id');
    $statement->execute([':movie_id' => $movieId]);
    return  $statement->fetch();
};


function read_seller_edit(string $title, string $description,string $released,string $language,string $genre,string $country, int $id) : bool
{
    global $connection;
    $statement = $connection->prepare("UPDATE movies SET title = :title, description = :description,released = :released ,language = :language ,genre =:genre,country =:country WHERE movie_id = :movie_id");
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
    $statement = $connection->prepare('SELECT time_start FROM shows');
    $statement->execute();
    return  $statement->fetch();
}

//  Function add new show
function addNewShow(string $show_date,string $show_time_start,int $movie_id,int $hall_id) : array
{
    global $connection;
    $statement = $connection->prepare("INSERT INTO shows (date_show,  time_start, movie_id,  hall_id) VALUES (:date_show,  :time_start, :movie_id,  :hall_id)");
    $statement->execute([
        ':date_show' => $show_date,
        ':time_start' => $show_time_start,
        ':movie_id' => $movie_id,
        ':hall_id' => $hall_id,
    ]);
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}


// Function edit show----------------------------------------------------------------



function getShow ():array
{
    global $connection;
    $statement = $connection->prepare('SELECT * FROM hall_shows');
    $statement->execute();
    return  $statement->fetchAll();
}


function editShow($dateShow,string $title,string $hallName, string $timeStart, int $id) : bool
{
    global $connection;
    $statement = $connection->prepare('UPDATE hall_shows SET title = :title, date_show = :date_show, hall_name = :hall_name ,time_start = :time_start WHERE movie_id = :movie_id');
    $statement->execute([
        ':title' => $title,
        ':date_show' => $dateShow,
        ':hall_name' => $hallName,
        ':time_start' => $timeStart,
        ':movie_id' => $id
    ]);
    return $statement->rowCount() > 0;
}