<?php

// $hostname = "localhost";
$hostname = "127.0.0.1";
$database = "cinema_ticket_app";

$username = "root";
$password = "";

$dsn = "mysql:host=$hostname;dbname=$database;charset=utf8mb4";
$connection = new PDO($dsn, $username, $password);
