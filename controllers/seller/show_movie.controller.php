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
    
}
if($_SERVER['REQUEST_METHOD'] === 'POST')
{
    
    $show_date = validation($_POST["date"]);
    $show_time_start = validation($_POST["time_start"]);
    $movie_id = validation($_POST["movie_id"]);
    $hall_id = validation($_POST["cinema_hall_id"]);

    // $confirmPassword = validation($_POST["comfirm-password"]);
    
    if(empty($show_date)){ 
        $messageError["date"] = "please enter the date to show movies";
    }
    if(empty($show_time_start))
    {
        $messageError["time_start"] = " Please enter the time that movie start";
    }    
    if(empty($movie_id))
    {
        $messageError["movie_id"] = "Please enter your movie ID ";
    }   
    if(empty($hall_id))
    {
        $messageError["cinema_hall_id"] = "Please enter your hall ID ";
    }   
   
 
    if(empty($messageError))
    {
        header("location:/");
    }
    if(empty($messageError)){
        addNewShow( $show_date, $show_time_start, $show_time_start, $movie_id, $hall_id);
    }
}
require("views/seller/create_show.movie.view.php");

?>
