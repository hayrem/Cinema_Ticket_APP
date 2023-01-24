<?php
function getMovie() : array
{
    global $connection;
    $statement = $connection->prepare("select * from movies");
    $statement->execute();
    $result = $statement->get_result();
    return ($row = $result->fetch_assoc());
}
?>
// example if we use it 
 <?= $row['title'] 
 ?> 
