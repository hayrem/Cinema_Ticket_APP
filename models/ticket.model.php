<?php
require "database/database.php";


function showTicket() : array
{
    global $connection;
    $statement = $connection->prepare("SELECT booking.*, users.first_name,users.last_name, shows.*,show_seats.*,movies.title,movies.image,cinema_halls.name FROM booking 
    INNER JOIN users ON booking.user_id = users.user_id 
    INNER JOIN shows on booking.show_id = shows.show_id
    INNER JOIN show_seats on booking.show_seat_id =show_seats.show_seat_id 
    INNER JOIN movies on shows.movie_id = movies.movie_id 
    INNER JOIN cinema_halls on shows.cinema_hall_id = cinema_halls.cinema_hall_id;");
    $statement->execute([]);
    return $statement->fetchAll(PDO::FETCH_ASSOC);

}