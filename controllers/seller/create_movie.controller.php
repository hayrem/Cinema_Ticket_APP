<?php
require "models/list_show.model.php";


// form validation $emailTrue = false;

$messageError = [];

function validation($data): string
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data; 
};


if($_SERVER['REQUEST_METHOD'] === 'POST')
{
    $mvTitle = validation($_POST['title']);
    $mvGenre = validation($_POST['genre']);
    $mvCountry = ($_POST['country']);
    $mvDuration = validation($_POST['duration']);
    // $mvLanguage = validation($_POST['language']);
    if(isset($_POST['submit'])){  
        if(!empty($_POST['language'])) {  
            $mvLanguage = $_POST['language'];  
            echo 'You have chosen: ' . $mvLanguage;  
        } else {  
            echo 'Please select the value.';  
        }  
    };  
 
    if(isset($_POST['submit'])){  
        if(!empty($_POST['country'])) {  
            $selected = $_POST['country'];  
            echo 'You have chosen: ' . $selected;  
        } else {  
            echo 'Please select the value.';  
        }  
    };  

    $mvReleased = validation($_POST['released']);
    $mvImage = validation($_POST['image']);
    $mvDescription = validation($_POST['description']);
    $mvTrailer = validation($_POST['trailer']);

    // $confirmPassword = validation($_POST["comfirm-password"]);
    
    if(empty($mvTitle)){ 
        $messageError["title"] = "please enter the title of movie";
    }
    if(empty($mvGenre)){
        $messageError["genre"] = "please enter genre of movie";
    }
    if(empty($selected)){
        $messageError["country"] = "please enter country source of movie";
    }
    if(empty($mvDuration ))
    {
        $messageError["duration"] = " Please enter duration of movie";
    } 

    if(empty($mvReleased))
    {
        $messageError["released"] = "Please enter released date of movie";
    }   
    if(empty($mvImage))
    {
        $messageError["image"] = "Please enter image of movie";
    }   
    if(empty($mvDescription))
    {
        $messageError["description"] = "Please enter description  of movie";
    }   
    if(empty($mvTrailer))
    {
        $messageError["trailer"] = "Please enter trailer of movie";
    }   

    if(empty($messageError))
    {
        addNewMovie( $mvTitle, $mvGenre, $mvCountry, $mvDuration, $mvLanguage, $mvReleased, $mvImage, $mvDescription, $mvTrailer) ;
        header('location: /seller');
    }else{
        header('location: /');

    }
};
require("views/seller/create_movie.view.php");


?>


