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


function read_seller_edit(string $title, string $description,string $released,string $language,string $genre,string $country,string $image, int $id) : bool
{
    global $connection;
    $statement = $connection->prepare("update movies set title = :title, description = :description,released = :released ,language = :language ,genre =:genre,country =:country,image = :image where movie_id = :movie_id");
    $statement->execute([
        ':title' => $title,
        ':description' => $description,
        ':released' => $released,
        'language' => $language,
        'country' => $country,
        'genre' => $genre,
        'image' => $image,
        ':movie_id' => $id

    ]);

    return $statement->rowCount() > 0;
}