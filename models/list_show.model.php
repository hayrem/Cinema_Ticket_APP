<?php
require("database/database.php");
// seach fucntion 
function getMovie(string $search) : array
{
    global $connection;
    $statement = $connection->prepare("SELECT title,released,image,duration,movie_id FROM movies WHERE title LIKE '%{$search}%' OR released LIKE '%{$search}%'");
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}

// details fucntion
function showMovie() : array
{
    global $connection;
    $statement = $connection->prepare("SELECT movie_id, title,released,image,duration FROM movies");
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}
$shows=showMovie();

// get id movie
function getDetailMovie(int $getID) : array
{
    global $connection;
    $statement = $connection->prepare("SELECT * FROM movies 
    INNER JOIN shows ON movies.movie_id = shows.show_id 
    INNER JOIN cinema_halls ON shows.cinema_hall_id = cinema_halls.cinema_hall_id
    WHERE movies.movie_id = :movie_id");
    $statement->execute([':movie_id'=> $getID]);
    return $statement->fetchAll(PDO::FETCH_ASSOC);
 
}

//cinema detail fuction 
function getDetahall() : array
{
    global $connection;
    $statement = $connection->prepare("SELECT * FROM cinema_halls");
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
 
}

// function remove movie card that already descripe in detial 
function notListShow(int $id) : array
{
    global $connection;
    $statement = $connection->prepare("SELECT * FROM movies WHERE movie_id != :id");
    $statement->execute([':id'=> $id]);
    return $statement->fetchAll(PDO::FETCH_ASSOC);

}


//  Function add new movie
function addNewMovie(string $title,string $genre, string $mv_country, string $mv_duration,string $mv_language,string $mv_released,string $mv_image, /* string $show_date,string $show_time_start,string $show_time_end,string $hallName, string $total_seat,  */string $mv_description, string $mv_trailer) : array
{
    global $connection;
    $statement = $connection->prepare("INSERT INTO movies (title, genre, country, duration, released, language, description, image, trailer) VALUES (:title, :genre, :country, :duration, :released, :language, :description, :image, :trailer)");
    $statement->execute([
        ':title' => $title,
        ':genre' => $genre,
        ':country' => $mv_country,
        ':duration' => $mv_duration,
        ':language' => $mv_language,
        ':released' => $mv_released,
        ':image' => $mv_image,
        ':description' => $mv_description,
        ':trailer' => $mv_trailer,
    ]);
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}

//  Function add new show
function addNewShows(string $show_date,string $show_time_start, string $show_time_end, string $movie_id,string $hall_id) : array
{
    global $connection;
    $statement = $connection->prepare("INSERT INTO shows (date,  time_start,  time_end,  movie_id,  cinema_hall_id) VALUES (:date,  :time_start,  :time_end,  :movie_id,  :cinema_hall_id)");
    $statement->execute([
        ':date' => $show_date,
        ':time_start' => $show_time_start,
        ':time_end' => $show_time_end,
        ':movie_id' => $movie_id,
        ':cinema_hall_id' => $hall_id,
    ]);
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}

?>