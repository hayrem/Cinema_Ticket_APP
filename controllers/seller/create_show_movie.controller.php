
<?php 
    require ('models/seller_list_show.model.php');
    require ('models/hall_show.model.php');
    require ('models/list_show.model.php');

    $halls = getDetahall();

    $shows = showMovie();

    // print_r($shows);

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
     
    $dateShow = $_POST['date'];
    $showTimeStart = $_POST['time_start'];

    $movieTitle = $_GET['movie_id'];

    if(isset($_POST['submit'])){  
        if(!empty($_POST['hall'])) {  
            $hall = $_POST['hall'];  
        } else {   
            $messageError["hall"] = "Please select language";
        }  
    };  

    if(empty($hall)){
        $messageError["hall"] = "Please enter  hall show  movie";
    }   
    if(empty($dateShow))
    {
        $messageError["trip-start"] = "Please enter date for show";
    }   
    if(empty($showTimeStart))
    {
        $messageError["time_start"] = "Please enter time start  of movie";
    }   


    if(empty($messageError)){
        addNewShow($dateShow,$showTimeStart,$movieTitle,$hall);
        header('location: /seller/setting');
    }

}

    require("views/seller/create_show.movie.view.php");
?>