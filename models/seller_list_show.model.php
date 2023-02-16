<?php

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
