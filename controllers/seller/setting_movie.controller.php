<?php

// $heading = "Post Page";
// require "views/partials/head.php"; 
require "database/database.php" ;
require "models/list_show.model.php" ;
require "views/seller/setting_movie.view.php" ;

$statement = $connection->prepare("select * from movies");
$statement->execute();
$seller = $statement->fetchAll();




// require "views/partials/footer.php" 
?>