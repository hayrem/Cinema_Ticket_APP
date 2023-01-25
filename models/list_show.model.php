<?php
function getMovie(int $id) : array
{
    global $connection;
    $statement = $connection->prepare("select * from movies where id = :id ");
    $statement->execute(
        [
            ":id" => $id
        ]
    );
    return $statement->fetchAll();
}
?>