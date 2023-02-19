<?php
require("database/database.php");

function userBooking(string $firstName,string $lastName, string $email,string $phoneNumber) : bool
{
    global $connection;
    $statement = $connection->prepare("INSERT INTO booking (first_name,last_name, email,phone_number)
    VALUE (:firstName,:lastName, :email,:phoneNumber)");
    $statement->execute([
        ':firstName' => $firstName,
        ':lastName' => $lastName,
        ':email' => $email,
        ':phoneNumber' => $phoneNumber
    ]);
    return $statement->rowCount() > 0;
}

