<?php

// $hostname = "localhost";
$hostname = "127.0.0.1";
$database = "cinema_ticket_app";

$username = "root";
$password = "";

$dsn = "mysql:host=$hostname;dbname=$database;charset=utf8mb4";
$connection = new PDO($dsn, $username, $password);

// try {
//     $connection = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
//     $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// }catch(PDOException $e){
//   echo "Connection failed : ". $e->getMessage();
// }