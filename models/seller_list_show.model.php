<?php
require("database/database.php");

// function read_seller_edit(){
//     global $connection;
//     if ($_SERVER['REQUEST_METHOD'] == 'POST') {

//         if (!empty($_POST['movie_id']) and !empty($_POST['title']) and !empty($_POST['genre'])
//             and !empty($_POST['country']) and !empty($_POST['duration']) and !empty($_POST['released']) 
//             and !empty($_POST['language']) and !empty($_POST['description'])) 
//         {
//             $statement = $connection->prepare("update movies set title = :title, genre = :genre, country = :country, duration = :duration, released = :released, language = :language,  description = :description, image = :image where movie_id = :movie_id");
//             $statement->execute([
//                 ':title' => $_POST['title'],
//                 ':movie_id' => $_POST['movie_id'],
//                 ':genre' =>  $_POST['genre'],
//                 ':country' =>  $_POST['country'],
//                 ':duration' =>  $_POST['duration'],
//                 ':released' =>  $_POST['released'],
//                 ':language' =>  $_POST['language'],
//                 ':description' =>  $_POST['description'],
//                 ':image' =>  $_POST['image']
            
    
//             ]);
//         }
//     } 
// }


function updateMovie(string $title,string $genre, string $description, int $id) : bool
{
    global $connection;
    $statement = $connection->prepare("UPDATE movies SET title = :title, genre = :genre ,description = :description WHERE movie_id = :movie_id");
    $statement->execute([
        ':title' => $title,
        ':description' => $description,
        ':genre' => $genre,
        ':movie_id' => $id

    ]);

    return $statement->rowCount() > 0;
}



function getMovie(){
    global $connection;
    $statement = $connection->prepare("select * from movies");
    $statement->execute();
    return $statement->fetchAll();

}


function getMovieId($movie_id){
    global $connection;
    $statement = $connection->prepare('select * from movies where movie_id = :movie_id');
    $statement->execute([':movie_id' => $movie_id]);
    return  $statement->fetch();
};

