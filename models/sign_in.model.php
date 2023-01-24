
<?php
session_start();

$dsn = "mysql:host=localhost;dbname=cinema_ticket_app;charset=utf8mb4";
$connection = new PDO($dsn, 'root', '');

function getUseraccount($username,$password) : array
{
    global $connection;
    $statement = $connection->prepare("select  users.username , users.password where username:username and password:password");
    $statement->execute();
    return $statement->fetch(PDO::FETCH_ASSOC);
}