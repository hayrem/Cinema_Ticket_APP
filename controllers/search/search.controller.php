<?php


function testInput($data): string
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    
}
require "database/database.php";

if (isset($_POST['search'])) {
    $search  = testInput($_POST['search']);
}else{
    $search=' ';
}
$shows=getMovie($search);