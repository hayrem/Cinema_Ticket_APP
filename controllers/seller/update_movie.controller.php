<h1>hello page update</h1>
<?php


// if ( ! empty($_FILES)) {...} //check file


if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $movieId  = $_POST['movie_id'];
    $released = $_POST['released'];
    $language = $_POST['language'];
    $country = $_POST['country'];
    $genre = $_POST['genre'];


    if(! empty($title) 
    and ! empty($description) 
    and ! empty($movieId) 
    and ! empty($released)
    and ! empty($language)
    and ! empty($genre)
    and ! empty($country)){
        require "models/seller_list_show.model.php";
        $update = read_seller_edit($title,$description,$released,$language,$genre,$country,$movieId);

    }
    header('location:/seller/setting');
}