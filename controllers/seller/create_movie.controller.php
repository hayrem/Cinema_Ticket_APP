<?php
// echo "Wellcome bii";
// require "views/partials/head.php";


require("views/seller/create_movie.view.php");
if (isset($_POST['submit']))
{
    $mv_title = $_POST['title'];
    $mv_genre = $_POST['genre'];
    $mv_country = $_POST['country'];
    $mv_duration = $_POST['duration'];
    $mv_language = $_POST['language'];
    $mv_released = $_POST['released'];
    $mv_image = $_POST['image'];
    $mv_description =$_POST['description'];
    $mv_trailer = $_POST['trailer'];
    // $show_date =$_POST['date'];
    // $show_time_start = $_POST['time_start'];
    // $show_time_end =$_POST['time_end'];
    // $hallName = $_POST['name'];
    // $total_seat = $mv_title_POST['total_seat'];
    
    echo "<h3>".$mv_title."</h3>";
    echo "<h3>".$mv_genre."</h3>";
    echo "<h3>".$mv_country."</h3>";
    echo "<h3>".$mv_duration."</h3>";
    echo "<h3>".$mv_language."</h3>";
    echo "<h3>".$mv_released."</h3>";
    echo "<h3>".$mv_image."</h3>";
    echo "<h3>".$mv_description."</h3>";
    echo "<h3>".$mv_trailer."</h3>";
}

// addNewMovie( $title, $genre,  $mv_country, $mv_duration, $mv_language, $mv_released, $mv_image, $mv_description,  $mv_trailer) ;


// form validation $emailTrue = false;

$messageError = [];

function validation($data): string
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    
}
if($_SERVER['REQUEST_METHOD'] === 'POST')
{
    
    $title = validation($_POST["title"]);
    $genre = validation($_POST["genre"]);
    $duration = validation($_POST["duration"]);
    $released = validation($_POST["released"]);
    // $confirmPassword = validation($_POST["comfirm-password"]);
    
    if(empty($title)){ 
        $messageError["title"] = "please enter a first name";
    }elseif(strlen($title) > 20)
    {
        $messageError["title"] = 'Username most more that 5 letters and least that 20 letters';
    }
    if(empty($genre)){
        $messageError["genre"] = "please enter a  genre of movie";
    }elseif(($genre))
    {
        $messageError["genre"] = 'Username most more that 5 letters and least that 20 letters';
    }
    if(empty($duration ))
    {
        $messageError["duration"] = " Please enter duration";
    } 
  
    if(empty($released))
    {
        $messageError["released"] = "Please enter released ";
    }   
   
 
    if(empty($messageError))
    {
        header("location:/");
    }
    
}
require("views/seller/create_movie.view.php");
?>


