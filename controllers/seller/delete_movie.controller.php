<?php
require 'database/database.php';

$movie_id = $_GET['movie_id'];
if (isset($movie_id))
{
    $statement = $connection->prepare("delete from movies where movie_id = :movie_id");
    $statement->execute([':movie_id' => $movie_id]);

    header('Location: /setting');
}