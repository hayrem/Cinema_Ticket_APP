<?php

require "../../database/database.php";
require "../../models/list_show.model.php";
read_seller_edit($connection);
// require "../../views/partials/head.php";
// require "functions.php";
// require "../../views/partials/nav.php";

    $movie_id = $_GET["movie_id"] ? $_GET["movie_id"] : null;
    if (isset($movie_id)):
       
       $statement = $connection->prepare('select * from movies where movie_id = :movie_id');
       $statement->execute([':movie_id' => $movie_id]);
       $seller = $statement->fetch();
       echo ($movie_id);
       
    endif;

       
       
require "../../views/seller/edit_movie.view.php";
// require "../../views/partials/footer.php" 
?>