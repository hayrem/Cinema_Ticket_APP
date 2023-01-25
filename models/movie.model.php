
<?php
// require "../database/database.php";
function getMovie(string $title,int $duration, int $released,string $image) : array
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

// $shows =  getMovie($tilte,$duration,$released,$image);


// foreach($shows as $show){
//     echo  $shpw['title'];
// }
?>  
