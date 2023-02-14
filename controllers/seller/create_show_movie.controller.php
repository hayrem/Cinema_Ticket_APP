
<?php 
    require ('models/list_show.model.php');
    require ('models/hall_show.model.php');

    $halls = getDetahall();

    $shows = showMovie();


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
    $showTimeEnd = $_POST['time_end'];
    $showTimeStart = $_POST['time_start'];

    echo $dateShow."<br>";
    echo $showTimeEnd."<br>";
    echo $showTimeStart."<br>";

    if(isset($_POST['submit'])){  
        if(!empty($_POST['title-movie'])) {  
            $movieTitle = $_POST['title-movie'];  
        } else {  
            $messageError["title-movie"] = "Please select genre";
        }  
    };

    if(isset($_POST['submit'])){  
        if(!empty($_POST['hall'])) {  
            $hall = $_POST['hall'];  
        } else {   
            $messageError["hall"] = "Please select language";
        }  
    };  

    
    if(empty($movieTitle)){ 
        $messageError["title"] = "please enter the title of movie";
    }
    if(empty($hall)){
        $messageError["hall"] = "please enter country source of movie";
    }   
    if(empty($dateShow))
    {
        $messageError["trip-start"] = "Please enter date for show";
    }   
    if(empty($showTimeStart))
    {
        $messageError["description"] = "Please enter description  of movie";
    }   
    if(empty($showTimeEnd))
    {
        $messageError["description"] = "Please enter description  of movie";
    }   

    if(empty($messageError)){
        addNewShow($dateShow,$showTimeStart,$showTimeEnd,$movieTitle,$hall);
        header('location: /seller/setting');
    }

}

    require("views/seller/create_show.movie.view.php");
?>