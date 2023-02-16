
<?php 
    require ('models/list_show.model.php');
    require ('models/hall_show.model.php');
    
    $halls = getDetahall();
    
    $shows = showMovie();
    require ('models/seller_list_show.model.php');

    $seleteTimeShow = getDataTimeShow();
    print_r($seleteTimeShow);

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

    if(isset($_POST['submit'])){
        if(!empty($_POST['time_start'])) {
            $showTimeStart = $_POST['time_start'];
            echo 'You have chosen: ' . $showTimeStart;
        } else {
            $messageError["time_start"] = "Please select time start";
        }
        }
        // if(!empty($_POST['time_start'])) 
        // {  
        //     $showTimeStart = $_POST['time_start'];   
        //     echo  $showTimeStart."<br>";
        // } else {  
        //     $messageError["time_start"] = "Please select time start";
        // }
        if(isset($_POST['submit'])){
        if(!empty($_POST['title-movie'])) {  
            $movieTitle = $_POST['title-movie'];  
        } else {  
            $messageError["title-movie"] = "Please select genre";
        }
    }

    if(isset($_POST['submit'])){
        if(!empty($_POST['hall'])) {  
            $hall = $_POST['hall'];  
        } else {   
            $messageError["hall"] = "Please select language";
        }  
    }
    
    // if(empty($movieTitle)){ 
    //     $messageError["title"] = "please enter the title of movie";
    // }
    // if(empty($hall)){
    //     $messageError["hall"] = "please enter country source of movie";
    // }   
    // if(empty($dateShow))
    // {
    //     $messageError["trip-start"] = "Please enter date for show";
    // }   
    // if(empty($showTimeStart))
    // {
    //     $messageError["description"] = "Please enter description  of movie";
    // }   


    if(empty($messageError)){
        addNewShow($dateShow,$showTimeStart,$movieTitle,$hall);
        header('location: /seller/setting');
    }

}
    require("views/seller/create_show.movie.view.php");
?>