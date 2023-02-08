<?php
require "database/database.php";
function testInput($data): string
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    
}
if (isset($_POST['search'])) {
    $search  = testInput($_POST['search']);
    $shows=getMovie($search);
    
}else{
    $shows=showMovie();
}



