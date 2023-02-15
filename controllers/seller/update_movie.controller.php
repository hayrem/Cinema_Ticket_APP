<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $movieId  = $_POST['movie_id'];
    $released = $_POST['released'];
    $language = $_POST['language'];
    $country = $_POST['country'];
    $genre = $_POST['genre'];
    $trailer = $_POST['trailer'];

    $newMvPoster = "";
    $imgName = "";
    if (isset($_POST['submit']) && isset($_FILES['image'])) 
    {     
        $imgName = $_FILES['image']['name'];
        $tmp_name = $_FILES['image']['tmp_name'];
        $img_ex = pathinfo($imgName, PATHINFO_EXTENSION);
        $img_ex_lc = strtolower($img_ex);
        $allowed_exs = array("jpg", "jpeg", "png"); 

        if(in_array($img_ex_lc, $allowed_exs))
        {
            $newMvPoster = uniqid("IMG-", true).'.'.$img_ex_lc;
            $img_upload_path = 'uploads/'.$newMvPoster;
            move_uploaded_file($tmp_name, $img_upload_path);
        }   
    }  
    // if (empty($newMvPoster)){
    //     $newMvPoster = $editMovie['image'];
    // }
    if( ! empty($title) 
    and ! empty($description) 
    and ! empty($movieId) 
    and ! empty($released)
    and ! empty($language)
    and ! empty($genre)
    and ! empty($newMvPoster)
    and ! empty($country)){
        require "models/seller_list_show.model.php";
        $update = read_seller_edit($title,$description,$released,$language,$genre,$country,$movieId,$newMvPoster,$trailer);
        header('location:/seller/setting');
    }


}
