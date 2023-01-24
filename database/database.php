<?php

$hostname = "localhost";
$database = "cinema_ticket_app";


$dsn = "mysql:host=$hostname;dbname=$database;charset=utf8mb4";
$connection = new PDO($dsn, "root", "");
