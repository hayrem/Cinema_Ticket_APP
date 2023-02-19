<?php

function getMovieId(int $movieId):array
{
    global $connection;
    $statement = $connection->prepare('SELECT * FROM movies WHERE movie_id = :movie_id');
    $statement->execute([':movie_id' => $movieId]);
    return  $statement->fetch();
};


function read_seller_edit(string $title, string $description,string $released,string $language,string $genre,
string $country, int $id, string $image, string $trailer) : bool
{
    global $connection;
    $statement = $connection->prepare("UPDATE movies SET title = :title, description = :description, released = :released, 
    language = :language, genre =:genre, country =:country, image =:image, trailer =:trailer WHERE movie_id = :movie_id");
    $statement->execute([
        ':title' => $title,
        ':description' => $description,
        ':released' => $released,
        ':released' => $released,
        ':language' => $language,
        ':country' => $country,
        ':genre' => $genre,
        ':movie_id' => $id,
        ':image' => $image,
        ':trailer' => $trailer,
    ]);
    return $statement->rowCount() > 0;
}


function getDataTimeShow():array
{
    global $connection;
    $statement = $connection->prepare('SELECT time_start FROM shows');
    $statement->execute();
    return  $statement->fetch();
}


function addNewShow(string $showDate,string $showTimeStart,int $movieId,int $hallId) : array
{
    global $connection;
    $statement = $connection->prepare("INSERT INTO shows (date_show,  time_start, movie_id,  hall_id) VALUES (:date_show,  :time_start, :movie_id,  :hall_id)");
    $statement->execute([
        ':date_show' => $showDate,
        ':time_start' => $showTimeStart,
        ':movie_id' => $movieId,
        ':hall_id' => $hallId,
    ]);
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}




function getShowIdToEdit(int $showId):array
{
    global $connection;
    $statement = $connection->prepare('SELECT * FROM shows WHERE show_id = :show_id');
    $statement->execute([':show_id' => $showId]);
    return  $statement->fetch();
};


function editShow(string $dateShow,string $hallName, string $timeStart, int $id) : bool
{
    global $connection;
    $statement = $connection->prepare('UPDATE hall_shows SET date_show = :date_show, hall_name = :hall_name ,time_start = :time_start WHERE show_id = :show_id');
    $statement->execute([
        ':date_show' => $dateShow,
        ':hall_name' => $hallName,
        ':time_start' => $timeStart,
        ':show_id' => $id
    ]);
    return $statement->rowCount() > 0;
}

function updatePost(string $post,int $id) : bool
{
    global $connection;
    $statement = $connection->prepare("UPDATE movies SET post=:post WHERE movie_id = :movie_id");
    $statement->execute([
        ':post' => $post,
        ':movie_id' => $id
    ]);
    return $statement->rowCount() > 0;
}