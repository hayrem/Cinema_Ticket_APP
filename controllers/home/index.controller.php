<?php
// $heading = "Home page";

require "models/list_show.model.php";

$heading = "Home page";

require "models/post.model.php";
// $posts = getPosts();


?>

<?php

require "database/database.php";

if (isset($_POST['input'])) {
    $input  = $_POST['input'];
    $query  = "select * form cinema_ticket_app where title like '{$input}%' or released like '{$input}%'
    OR country like '{$input}%' OR language like '{$input}%'";
    $result = $connection->query($query);
    $rows = $result->fetchAll();

    if (!empty($result)) { 
        foreach ($rows as $row) {
            $id  = $row['id'];
            $title = $row['title'];
            $released = $row['released'];
            $country = $row['country'];
            $language = $row['language'];
        }

        echo $id;
          
    } else {
        echo "<h6 class='text-danger text-ceter mt-3 '> no results found</h6>";
    }
}

require "views/home/index.view.php";