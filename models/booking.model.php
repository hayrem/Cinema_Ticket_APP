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


function getBookingTicket(string $firstName,string $lastName, string $email,string $phoneNumber,int $show_id,int $hall_seat_id) : bool
{
    global $connection;
    $statement = $connection->prepare("INSERT INTO booking (first_name,last_name, email,phone_number,show_id,hall_seat_id)
    VALUE (:firstName,:lastName, :email,:phoneNumber, :show_id,:hall_seat_id)");
    $statement->execute([
        ':firstName' => $firstName,
        ':lastName' => $lastName,
        ':email' => $email,
        ':phoneNumber' => $phoneNumber,
        ':show_id' => $show_id,
        ':hall_seat_id' => $hall_seat_id
    ]);
    return $statement->rowCount() > 0;
}

