<h1>hello page update</h1>
<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (!empty($_POST['title'])
     and !empty(['description'] 
     and !empty(['movie_id']))) 
    { 
        require "models/seller_list_show.model.php";
        $update = read_seller_edit($_POST['title'],$_POST['description'],$_POST['movie_id']);

    }
    header('location:/seller/setting');
}

// print_r($update);



// if ( ! empty($_FILES)) {...} //check file