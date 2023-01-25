<?php
require("database/database.php") ;
function getMovie() : array
{
    global $connection;
    $statement = $connection->prepare("select title,released, duration,image from movies");
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}
$shows=getMovie();
foreach( $shows as $show )
{
    echo $show["title"];
    echo $show["released"];
    echo $show["duration"];
    echo $show["image"];
}
?>