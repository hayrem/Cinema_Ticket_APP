<?php
// require("database/database.php");
function updateMovies(string $title, string $description,string $genre,string $country,string $duration,string $released,string $language, int $movieId) : bool
{
            global $connection;
            $statement = $connection->prepare("update movies set title = :title, genre = :genre, country = :country, duration = :duration, released = :released, language = :language,  description = :description, where movie_id = :movie_id");
            $statement->execute([
                ':title' => $title,
                ':genre' =>  $genre,
                ':movie_id' => $movieId,
                ':country' =>  $country,
                ':duration' =>  $duration,
                ':released' =>  $released,
                ':language' =>  $language,
                ':description' =>  $description,
                // ':image' =>  $_POST['image']
            
    
            ]);

    return $statement->rowCount() > 0;
}


function getMovie(){
    global $connection;
    $statement = $connection->prepare("select * from movies");
    $statement->execute();
    return $statement->fetchAll();

}


function getMovieId(int $movieId):array
{
    global $connection;
    $statement = $connection->prepare('select * from movies where movie_id = :movie_id');
    $statement->execute([':movie_id' => $movieId]);
    return  $statement->fetch();
};


function read_seller_edit(string $title, string $description, int $id) : bool
{
    global $connection;
    $statement = $connection->prepare("update movies set title = :title, description = :description where movie_id = :movie_id");
    $statement->execute([
        ':title' => $title,
        ':description' => $description,
        ':movie_id' => $id

    ]);

    return $statement->rowCount() > 0;
}