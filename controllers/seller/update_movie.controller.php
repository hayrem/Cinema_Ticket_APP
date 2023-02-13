<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

if (!empty($_POST['title']) and !empty($_POST['description'])) {
    require "models/seller_list_show.model.php";
    $seller = updateMovie($title,$genre,$description,$id);
    // updateMovie($_POST['title'], $_POST['description']);

    header('location: /seller/sitting');
}
}


