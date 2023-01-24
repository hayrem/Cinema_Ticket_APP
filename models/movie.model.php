
<?php
function getMovie(string $title,time $duration, year $released,string $image) : array
{
    global $connection;
    $statement = $connection->prepare("select * from movies where title = :title, duration = :duration, released = :released, image = :image");
    $statement->execute(
        [
            ":title" => $title,
            ":duration" => $duration,
            ":released" => $released,
            ":image" => $image
        ]
    );
    return $statement->fetch();
}
?>
