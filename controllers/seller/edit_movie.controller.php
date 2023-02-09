<?php

require "models/seller_list_show.model.php";

read_seller_edit($connection);

    $movie_id = $_GET["movie_id"] ? $_GET["movie_id"] : null;

    if (isset($movie_id)){
        $statement = $connection->prepare('select * from movies where movie_id = :movie_id');
        $statement->execute([':movie_id' => $movie_id]);
        $seller = $statement->fetch();
    }

       
       
require "views/seller/edit_movie.view.php";

?>