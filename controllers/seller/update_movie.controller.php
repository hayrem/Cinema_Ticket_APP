<h1>hello page update</h1>
<?php


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (!empty($_POST['movie_id']) and !empty($_POST['title']) and !empty($_POST['genre'])
                and !empty($_POST['country']) and !empty($_POST['duration']) and !empty($_POST['released']) 
                and !empty($_POST['language']) and !empty($_POST['description'])) 
        { 
        require "models/seller_list_show.model.php";
        $movieUpdate = updateMovies($_POST['title'], $_POST['description'],$_POST['genre'], $_POST['movie_id'],$_POST['released'],$_POST['country'],$_POST['duration'],$_POST['language']);

        header('location:/seller/sitting');
    }
}

