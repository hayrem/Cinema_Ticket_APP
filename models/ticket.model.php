<?php
require "database/database.php";

function showTicket() : array
{
    global $connection;
    $statement = $connection->prepare
    ("SELECT booking.hall_seat_id,booking.show_id,booking.first_name,booking.last_name,booking.phone,booking.hall_seat_id,shows.movie_id,shows.time_start ,shows.hall_id,shows.date_show 
    FROM booking INNER JOIN shows ON booking.show_id = shows.show_id");
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
};