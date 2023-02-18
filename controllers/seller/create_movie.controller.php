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
    $mvDuration = validation($_POST['duration']);
    $isGenreTrue = true;
    $mvGenre = "";
    if(isset($_POST['submit'])){  
        if(!empty($_POST['genre'])) {  
            $mvGenre = $_POST['genre'];  
        } else {  
            $messageError["genre"] = "Please enter genre of movie"; 
        }  
    }; 
    $mvLanguage = "";
    if(isset($_POST['submit'])){  
        if(!empty($_POST['language'])) {  
            $mvLanguage = $_POST['language'];  
        } else {  
            $messageError["language"] = "Please enter language"; 
        }  
    };  
    $mvCountry = "";
    if(isset($_POST['submit'])){  
        if(!empty($_POST['country'])) {  
            $mvCountry = $_POST['country'];   
        } else {  
            $messageError["country"] = "Please enter country source of movie"; 
        }  
    };  

    $mvReleased = validation($_POST['released']);
    $mvDescription = validation($_POST['description']);
    $mvTrailer = validation($_POST['trailer']);
    
    if(empty($mvTitle)){ 
        $messageError["title"] = "Please enter the title of movie";
    }
    if(empty($mvReleased))
    {
        $messageError["released"] = "Please enter released date of movie";
    } 
    elseif(!is_numeric($mvReleased))
    {
        $messageError["released"] = "Input must be a number";
    }     
    elseif(strlen($mvReleased) >4)
    {
        $messageError["released"] = "Input only years";
    } 
    if(empty($mvDuration ))
    {
        $messageError["duration"] = " Please enter duration of movie";
    } 
    if(empty($mvReleased))
    {
        $messageError["released"] = "Please enter released date of movie";
    }     
    if(empty($mvDescription))
    {
        $messageError["description"] = "Please enter description  of movie";
    }   
    if(empty($mvTrailer))
    {
        $messageError["trailer"] = "Please enter trailer of movie";
    }   

    $newMvPoster="";

    if (isset($_POST['submit']) && isset($_FILES['image'])) 
    {     
        $imgName = $_FILES['image']['name'];
        $img_size = $_FILES['image']['size'];
        $tmp_name = $_FILES['image']['tmp_name'];
        $error = $_FILES['image']['error'];
        $img_ex = pathinfo($imgName, PATHINFO_EXTENSION);
        $img_ex_lc = strtolower($img_ex);
        $allowed_exs = array("jpg", "jpeg", "png"); 

        if(empty($imgName))
        { 
            $messageError["image"] = "Please uploads poster of movie";
        }elseif(in_array($img_ex_lc, $allowed_exs) && empty($messageError))
        {
            $newMvPoster = uniqid("IMG-", true).'.'.$img_ex_lc;
            $img_upload_path = 'uploads/'.$newMvPoster;
            move_uploaded_file($tmp_name, $img_upload_path);

            if(empty($newMvPoster))
            {
                header('location: /seller/create_movie');
            }  else{
                addNewMovie($mvTitle, $mvGenre, $mvCountry, $mvDuration, $mvLanguage, $mvReleased, $newMvPoster, $mvDescription, $mvTrailer) ;
                header('location: /seller/setting');
            }
        }   
    }


}

require("views/seller/create_movie.view.php");


?>
