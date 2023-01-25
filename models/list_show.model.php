<?php
require("database/database.php");
function getMovie() : array
{
    global $connection;
    $statement = $connection->prepare("select title,released,image,duration from movies");
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}
$shows=getMovie();



function getDetailMovie(int $getId) : array
{
    $getId=$_GET['movie_id'];
    if(isset($_GET['movie_id'])){
        global $connection;
        $statement = $connection->prepare("select * from movies where movie_id = :movie_id");
        $statement->execute([':movie_id' => $getId]);
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>