<?php
require "database/database.php";
require "./models/seller_list_show.model.php";
read_seller_edit($connection);
// require "views/partials/head.php";
// require "functions.php";
// require "views/partials/nav.php";

    $id = $_GET["movie_id"] ? $_GET["movie_id"] : null;
    if (isset($id)):
       
       $statement = $connection->prepare('select * from movies where movie_id = :movie_id');
       $statement->execute([':movie_id' => $id]);
       $editMovie = $statement->fetch();
       echo ($id);
       require "views/seller/edit_movie.view.php";


        // print_r($editMovie);
    endif;
        

?>