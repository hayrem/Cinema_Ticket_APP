<?php
$hostname = "localhost";
$database = "cinema_ticket_app";


$dsn = "mysql:host=$hostname;dbname=$database;charset=utf8mb4";
$connection = new PDO($dsn, "root", "");


function getUseraccount(string $username, string $password) : array
{
    global $connection;
    $statement = $connection->prepare("select user_name , password from users where user_name =:username and password =:password");
    $statement->execute([ 
        ':username' => $username,
        ':password' => $password]
       
    );
    return $statement->fetch();
}