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
    $statement = $connection->prepare("SELECT * FROM hall_shows 
    WHERE movie_id = :movie_id");
    $statement->execute([':movie_id'=> $getID]);
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}


// $cinemas = getDetaCinemas();
// echo $cinemas;
function notListShow(int $id) : array
{
    global $connection;
    $statement = $connection->prepare("SELECT * FROM hall_shows WHERE movie_id != :id");
    $statement->execute([':id'=> $id]);
    return $statement->fetchAll(PDO::FETCH_ASSOC);

}



function addNewMovie(string $mvTitle,string $mvGenre, string $mvCountry, string $mvDuration,string $mvLanguage,string $mvReleased,string $newMvPoster, string $mvDescription, string $mvTrailer) : array
{
    global $connection;
    $statement = $connection->prepare("INSERT INTO movies (title, genre, country, duration, released, language, description, image, trailer) VALUES (:title, :genre, :country, :duration, :released, :language, :description, :image, :trailer)");
    $statement->execute([
        ':title' => $mvTitle,
        ':genre' => $mvGenre,
        ':country' => $mvCountry,
        ':duration' => $mvDuration,
        ':language' => $mvLanguage,
        ':released' => $mvReleased,
        ':image' => $newMvPoster,
        ':description' => $mvDescription,
        ':trailer' => $mvTrailer,
    ]);
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}

//  Function add new show
function addNewShow(string $show_date,string $show_time_start, string $show_time_end,int $movie_id,int $hall_id) : array
{
    global $connection;
    $statement = $connection->prepare("INSERT INTO shows (date_show,  time_start,  time_end,  movie_id,  hall_id) VALUES (:date_show,  :time_start,  :time_end,  :movie_id,  :hall_id)");
    $statement->execute([
        ':date_show' => $show_date,
        ':time_start' => $show_time_start,
        ':time_end' => $show_time_end,
        ':movie_id' => $movie_id,
        ':hall_id' => $hall_id,
    ]);
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}

?>